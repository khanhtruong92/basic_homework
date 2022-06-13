<?php
namespace Processing;

// Dùng abstract class để xác định yêu cầu quản lý thẻ (card)
abstract class ManageCardInformation
{
    // Thông tin thẻ
    protected $cardholderName;
    protected $cardNumber;
    protected $cardExpiryDate;
    protected $cardVerificationValue;
    protected $creditCardLimit = 0;

    // Các hoạt động đối với thẻ
    abstract protected function cardInformationUpdate(
        $cardholderName,
        $cardNumber,
        $cardExpiryDate,
        $cardVerificationValue
    );
    abstract protected function cardInformationViewing();
    abstract protected function putMoney($amount);
    abstract protected function payment(
        $amountToPay,
        $cardExpiryDate,
        $cardVerificationValue
    );
}

// Chức năng bổ sung: chuyển đổi tiền tệ
interface ConvertToEuroCurrency
{
    public function currencyConversion();
}

// class quản lý thẻ Visa/Master
class ManageCardVisaMaster extends ManageCardInformation implements ConvertToEuroCurrency
{
    public function currencyConversion()
    {
        $euro = $this->creditCardLimit * \Processing\Conversion\UsdToEuro::UTE;
        echo "Cardholder Name: {$this->cardholderName} \n";
        echo "Card Number: {$this->cardNumber} \n";
        echo "Credit Card Limit: $euro EURO \n \n";
    }

    public function cardInformationUpdate(
        $cardholderName,
        $cardNumber,
        $cardExpiryDate,
        $cardVerificationValue
    ) {
        $this->cardholderName = $cardholderName;
        $this->cardNumber = $cardNumber;
        $this->cardExpiryDate = $cardExpiryDate;
        $this->cardVerificationValue = $cardVerificationValue;
    }

    public function cardInformationViewing()
    {
        echo "Cardholder Name: {$this->cardholderName} \n";
        echo "Card Number: {$this->cardNumber} \n";
        echo "Credit Card Limit: {$this->creditCardLimit} USD \n \n";
    }

    public function putMoney($amount)
    {
        $this->creditCardLimit = $this->creditCardLimit + $amount;
        echo "Your card has received a payment: $amount \n";
        echo "Current balance: " . $this->creditCardLimit . "\n \n";
    }

    public function payment(
        $amountToPay,
        $cardExpiryDate,
        $cardVerificationValue
    ) {
        $today = date("d-m-Y");

        // Kiểm tra thẻ còn hạn sử dụng không
        // Kiểm tra mã xác minh có đúng thẻ không
        if (strtotime($today) <= strtotime($cardExpiryDate) 
        && ($this->cardVerificationValue === $cardVerificationValue)) {
            // Kiểm tra số tiền cần thanh toán có vượt hạn mức của thẻ không
            if ($amountToPay <= $this->creditCardLimit) {
                $this->creditCardLimit = $this->creditCardLimit - $amountToPay;
                echo "Your card has been charged: " . $amountToPay . "\n";
                echo "Current balance: {$this->creditCardLimit} USD \n \n";

            } else {
                echo "Transaction declined: " . $amountToPay . "\n";
                echo "Reason: Over limit \n \n";
            }

        } else {
            echo "The information you entered is not valid \n \n";
        }
    }
}

-- Tạo 1 bảng trung gian có agent_code và sum payment
CREATE view test AS
SELECT customer.AGENT_CODE, sum(customer.payment_amt) AS pmt_out
    FROM customer
    GROUP BY customer.AGENT_CODE 
    ORDER BY sum(customer.payment_amt);

-- update dữ liệu
UPDATE agents 
SET COMMISSION = COMMISSION -.02 
WHERE AGENT_CODE 
IN ( SELECT agent_code 
    FROM test 
    WHERE test.AGENT_CODE 
    IN 
    (
    -- Tìm các agent_code có payment nhỏ nhất
    SELECT test.agent_code 
    FROM test 
    WHERE test.pmt_out = 
        (
		SELECT min(pmt_out)
        FROM test
        )
    )
);

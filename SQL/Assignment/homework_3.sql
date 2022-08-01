-- Sửa đổi số hoa hồng của agent được chỉ định
UPDATE agents
SET COMMISSION = COMMISSION - .12
WHERE AGENT_CODE 
IN (
    -- Tìm agent mà của các customer chỉ định
	SELECT DISTINCT AGENT_CODE 
	FROM customer
	WHERE CUST_CODE 
    IN (
        -- Tìm customer thoả mãn điều kiện
		SELECT CUST_CODE 
        FROM customer 
        WHERE 
		(GRADE = 3)
		AND
		(CUST_COUNTRY != 'India')
		AND
		(OPENING_AMT < 7000)
    )
);

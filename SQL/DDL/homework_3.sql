CREATE TABLE customer(
	cust_code VARCHAR(6) NOT NULL,
    cust_name VARCHAR(40),
    cust_city CHAR(35),
    working_area VARCHAR(35),
    cust_country VARCHAR(20),
    grade INT,
    opening_amt DECIMAL(12,2),
    receive_amt DECIMAL(12,2),
    payment_amt DECIMAL(12,2),
    outstanding_amt DECIMAL(12,2),
    phone_no VARCHAR(17),
    agent_code CHAR(6),
    PRIMARY KEY (cust_code),
    FOREIGN KEY (agent_code) REFERENCES agents (agent_code)
);

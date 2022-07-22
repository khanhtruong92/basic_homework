CREATE TABLE orders (
	ord_num DECIMAL(6,0) NOT NULL,
    ord_amount DECIMAL(12,2),
    advance_amount DECIMAL(12,2),
    ord_date DATE,
    cust_code VARCHAR(6),
    agent_code CHAR(6),
    ord_description VARCHAR(60),
    PRIMARY KEY (ord_num),
    FOREIGN KEY (cust_code) REFERENCES customer (cust_code),
    FOREIGN KEY (agent_code) REFERENCES agents (agent_code)
);

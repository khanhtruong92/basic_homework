USE sql_test;
CREATE TABLE agents (
	agent_code CHAR(6) NOT NULL,
    agent_name CHAR(40),
    working_area CHAR(35),
    commission DECIMAL(10,2),
    phone_no CHAR(15),
    country VARCHAR(25),
    PRIMARY KEY (agent_code)
);

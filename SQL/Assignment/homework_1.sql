CREATE TABLE new_agents (
  `AGENT_CODE` varchar(6) NOT NULL DEFAULT '',
  `AGENT_NAME` varchar(40) DEFAULT NULL,
  `WORKING_AREA` varchar(35) DEFAULT NULL,
  `COMMISSION` decimal(10,2) DEFAULT NULL,
  `PHONE_NO` varchar(15) DEFAULT NULL,
  `COUNTRY` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`AGENT_CODE`)
); 

INSERT INTO new_agents 
SELECT * FROM (
    SELECT DISTINCT agents.AGENT_CODE, agents.AGENT_NAME, agents.WORKING_AREA, agents.COMMISSION, agents.PHONE_NO, customer.CUST_COUNTRY
    FROM agents
    INNER JOIN customer
    ON agents.AGENT_CODE = customer.AGENT_CODE
) AS temp
WHERE temp.WORKING_AREA = 'London' AND temp.CUST_COUNTRY = 'UK';

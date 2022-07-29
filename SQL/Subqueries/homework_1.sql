SELECT * FROM Employee WHERE Salary = (SELECT salary FROM Employee WHERE Salary < (SELECT MAX(Salary) FROM Employee)
ORDER BY salary DESC
LIMIT 1);

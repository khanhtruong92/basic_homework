SELECT title AS Project, sum(salary) AS 'Total salary'
FROM Employee
INNER JOIN Projects
ON Employee.Id = Projects.EmployeeId
GROUP BY title
HAVING sum(salary) > 45000;

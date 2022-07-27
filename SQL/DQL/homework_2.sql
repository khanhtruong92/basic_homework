SELECT Name, Title, City
FROM Employee
INNER JOIN Projects
ON Employee.Id = Projects.EmployeeId
WHERE City = 'london';

SELECT * FROM Employee WHERE (Department, Age) IN (SELECT Department, MAX(AGE) FROM Employee group by Department);

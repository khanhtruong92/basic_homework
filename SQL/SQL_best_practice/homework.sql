SELECT 
	agents.working_area, 
    AVG(agents.commission) AS avg_commission,
    COUNT(agents.agent_name) AS count_agent_name
FROM 
	agents
GROUP BY 
	agents.working_area
ORDER BY 
	AVG(agents.commission),
    COUNT(agents.agent_name) DESC;

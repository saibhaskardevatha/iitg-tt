SELECT a.id, a.name, a.start_time, a.end_time, b.venue, b.event_id FROM wednesday a INNER JOIN courses_senior b ON a.id = b.id WHERE a.id = 'ee544' OR a.id ='ee545';

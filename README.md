1. Create a database named ``test``  
2. Run ``composer update``  
3. Run ``php artisan migrate:fresh``  
4. Run the following SQL statements:  
```SQL
/*employees table*/
INSERT INTO test.employees (full_name) VALUES
	 ('Juan Tamad'),
	 ('Mina Magic');

/*profiles table*/
INSERT INTO test.profiles (employee_id,favorite_color,favorite_food) VALUES
	 (1,'Red','Adobo'),
	 (2,'Pink','Sinigang na Hipon');
     
/*friends table*/
INSERT INTO test.friends (employee_id,full_name) VALUES
	 (1,'Thanos'),
	 (1,'Iron Man'),
	 (2,'Batman'),
	 (2,'Superman');
```  
5. Run ``php artisan serv``

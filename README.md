# Web trac nghiem. Quiz web
PHP web quiz application with user login function.
Management function has not completed yet. Must Import quiz and Export test result directly from DB. 
Install:
Run PHP/MySQL Server.
Please execute mmt.sql to your db.
Change config in configs/config.php (with your db user/pass) to connect to database.
Import your data (students info, quiz question to database)
1. Table user: login info
2. Table test: Quiz name / time 
3. Table linhvuc: Sub class of quiz in test, include quiz table name.
4. Quiz tables: name in table linhvuc, can create many quiz table.
5. Table test_do: Test result, example query to get result: "SELECT user.*, test_do.* FROM test_do inner join user on test_do.user_id=user.id"

# Zeotap-application-1

This project is a **Rule Engine with Abstract Syntax Tree (AST)** for determining user eligibility based on attributes like age, department, income, and spend. The system allows users to define custom rules, validate them, and evaluate them against input data. It includes a frontend interface for rule input and evaluation, with a PHP backend to manage the rule engine and SQL for storing data.

### Features:
- **Create Custom Rules**: Input complex conditional rules (e.g., `(age > 30 AND department = 'Sales') OR (salary > 50000)`).
- **Data Input**: Submit user data in JSON format (e.g., `{"age": 35, "department": "Sales", "salary": 60000}`) for evaluation.
- **Rule Evaluation**: Evaluate rules in real-time, returning whether the input data satisfies the rules.
- **Modify Rules**: Modify existing rules and reevaluate them dynamically.
- **SQL Database**: Backend utilizes MySQL to store rule data and evaluation results.

### Technologies Used:
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

### File Structure:
- **index.html**: Main HTML file for the Rule Engine's frontend. Provides a user interface for creating and modifying rules, as well as evaluating them against data.
- **backend.php**: Handles rule parsing, AST generation, and rule evaluation logic. Also connects with the MySQL database for storing rules and results.
- **database.sql**: SQL file to create the necessary tables for storing rules and evaluation data.
- **demo.html**: A demo file for preview purposes, showcasing the interface and how the rule engine works.

### Installation:
1. Clone this repository.
2. Set up the MySQL database using the provided `database.sql` file.
3. Modify the database connection settings in `backend.php` to reflect your MySQL configuration.
4. Launch the `index.html` file to interact with the Rule Engine.

### Demo:
The demo file `demo.html` provides an instance of the frontend interface for preview purposes. Open it in any browser to see the design and functionality without connecting to the backend.

### How to Use:
1. Enter a rule in the provided text area (e.g., `(age > 30 AND department = 'Sales') OR (salary > 50000)`).
2. Enter user data in JSON format (e.g., `{"age": 35, "department": "Sales", "salary": 60000}`).
3. Click "Create Rule" to generate an AST, and "Evaluate Rule" to evaluate it.
4. Modify rules as needed using the "Modify Rule" button.
5. Combine rules is to combine 2 or more rules

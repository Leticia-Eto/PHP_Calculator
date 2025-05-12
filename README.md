# PHP_Calculator
This repository demonstrates fundamental PHP concepts including form handling, conditional structures, loops, and basic calculator implementation.

## 📁 Files Overview

### 1. calculador.php
- **Calculator Backend**: Processes form data from index.php
- **Operations**: Handles addition (+), subtraction (-), multiplication (*), and division (/)
- **Input Validation**: Checks for missing parameters and invalid operators
- **Styling**: Uses Atkinson Hyperlegible Mono font with lightgreen background

### 2. index.php
- **Calculator Frontend**: 
  - Form with two number inputs
  - Operation selector dropdown
  - Submits data to calculador.php using GET method
- **Styling**: 
  - Centered layout with responsive design
  - Consistent font family with calculador.php

### 3. estruturas.php
- **PHP Language Structures Demo**:
  - Conditional Structures:
    - `if/elseif/else` for age classification
    - `switch` for month days calculation
  - Looping Structures:
    - `while` loop
    - `do...while` loop
    - `for` loop
- **Output Formatting**:
  - Uses `<pre>` tag for structured console-like output
  - Large font size (2rem) for readability

## 🛠 Technologies Used
- PHP 7.4+
- HTML5
- CSS3
- Google Fonts (Atkinson Hyperlegible Mono)

## 🚀 Usage Instructions

### Local Setup
```bash
git clone https://github.com/Leticia-Eto/php_poo.git
cd php_poo
```


## Access Files

### 1. Calculator
Start PHP server:```php -S localhost:8000```

### 2.Structures Demo
Directly open```estruturas.php``` in browser via server

### Calculator Example
Enter two numbers

Select operation

Submit to see result in calculador.php

Example URL: calculador.php?num1=5&num2=3&ope=-

### 4. Example Output
```bash
O resultado é 2
```
Structures Demo:
```bash
**Estruturas Condicionais**
IF
É maior de idade

switch
Mês 6 tem 30 dias

**Estruturas de Repetição Condicionais**

While
0 1 2 3 4 5 6 7 8 9 

Do While
0 1 2 3 4 5 6 7 8 9 

FOR
0 1 2 3 4 5 6 7 8 9 
```

## 📜 License
This project is open-source and available under the MIT License.


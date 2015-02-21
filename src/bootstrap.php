<?php

// Data types
require_once 'Struct/Complex.php';
// Interfaces
require_once 'AdditionBehavior/AdditionBehavior.php';
require_once 'DivisionBehavior/DivisionBehavior.php';
require_once 'SubstractionBehavior/SubstractionBehavior.php';
require_once 'MultiplicationBehavior/MultiplicationBehavior.php';
// Concrete behaviors
//  Decimal
require_once 'AdditionBehavior/Decimal/AdditionBehavior.php';
require_once 'DivisionBehavior/Decimal/DivisionBehavior.php';
require_once 'SubstractionBehavior/Decimal/SubstractionBehavior.php';
require_once 'MultiplicationBehavior/Decimal/MultiplicationBehavior.php';
//  Complex
require_once 'AdditionBehavior/Complex/AdditionBehavior.php';
require_once 'DivisionBehavior/Complex/DivisionBehavior.php';
require_once 'SubstractionBehavior/Complex/SubstractionBehavior.php';
require_once 'MultiplicationBehavior/Complex/MultiplicationBehavior.php';
// Abstract calculator
require_once 'Calculator/Calculator.php';
// Concrete calculators
require_once 'Calculator/Decimal/Calculator.php';
require_once 'Calculator/Complex/Calculator.php';

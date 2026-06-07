# SOLID Principles in PHP

Practical exercises and refactoring examples applying SOLID principles in PHP.

This repository contains exercises focused on clean architecture, object-oriented programming, low coupling, high cohesion, and maintainable code using modern PHP practices.

# 📚 Topics Covered

- Single Responsibility Principle (SRP)
- Dependency Inversion Principle (DIP)
- Interfaces
- Dependency Injection
- Encapsulation
- Strong typing with `strict_types`
- `DateTimeImmutable`
- PHP 8 Enums
- Validation and clean code practices

# 🧱 Project Structure

## Sprint03 - Task01 - Level01

### Exercise 01 >>> SRP (Single Responsibility Principle)

Refactoring of an Olympic Games management system.

### Applied Concepts

- Separation of responsibilities
- Domain modeling
- Encapsulation
- Enum usage (`Medal`)
- Immutable dates (`DateTimeImmutable`)
- Input validation
- Object composition

### Main Classes

- `Athlete`
- `Event`
- `Result`
- `OlympicGames`
- `Medal`

### Original Problem

The original solution was implemented using a single large class responsible for:

- data processing
- event management
- athlete management
- result management
- output rendering

This violated the Single Responsibility Principle.

### Refactoring Improvements

The code was refactored into cohesive classes where every class has a single responsibility.

Benefits achieved:

 Better readability  
 Lower coupling  
 Higher cohesion  
 Easier maintenance  
 Better scalability  
 Strong typing  

## Exercise 02 >>> DIP (Dependency Inversion Principle)

Implementation of a payment processing system using interfaces and dependency injection.

### Applied Concepts

- Dependency Inversion Principle
- Interfaces as contracts
- Dependency Injection
- Polymorphism
  
### Main Components

- `PaymentGateway`
- `PayPalPaymentGateway`
- `StripePaymentGateway`
- `PaymentProcessor`
  
### DIP Implementation

Instead of depending on concrete classes:

php
private PayPalPaymentGateway $gateway;

# 📚 References

- KISS Principle with PHP Examples  
  https://agileparrot.com/2022/03/01/the-kiss-principle-with-php-examples/

- The DRY Principle and Why You Should Use It  
  https://medium.com/@Ialimijoro/the-dry-principle-and-why-you-should-use-it-f02435ae9449

- SOLID Principles PHP Edition — Dependency Inversion Principle  
  https://medium.com/@ulysess/solid-principles-php-edition-today-dependency-inversion-principle-b3f86f31c39c

- SOLID Principles PHP Edition — Single Responsibility Principle  
  https://medium.com/@ulysess/solid-principles-php-edition-today-single-responsibility-principle-5897edcfbdb3


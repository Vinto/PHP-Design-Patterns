# PHP-Design-Patterns #

### [Protoype](https://en.wikipedia.org/wiki/Prototype_pattern "Named link title") ###

Prototype is a creational design pattern.

To implement the pattern, declare an abstract base class that specifies a pure virtual clone() method. Any class that needs a "polymorphic constructor" capability derives itself from the abstract base class, and implements the clone() operation.
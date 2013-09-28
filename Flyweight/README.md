# Flyweight Pattern

Copyright (c) 2013 Faizal Pribadi

In the flyweight pattern instances of a class which are identical are shared in an implementation instead of creating a new instance of that class for every instance.

02
This is done largely to assist performance, and works best when a large number of the exact same instance of a class would otherwise be created.

03
In this example, the FlyweightBook class stores only author and title, with only three possible author title combinations being used by the system, and yet the system may have a large number of duplicate books.

04
FlyweightFactory is in charge of distributing instances of FlyweightBook, and only creates a new instance when necessary.
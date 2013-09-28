# Flyweight Pattern

Copyright (c) 2013 Faizal Pribadi

In the Memento pattern a memento object will hold the state of another object.

02
In this example, the BookMark class is the “Memento”, and holds the state of the BookReader class. The BookReader class would be the “Originator” in this example, as it had the original state. Client holds the BookMark object, and so is the “Caretaker”.

03
The memento should be set up so that the caretaker can create, set, and get memento values for an originator. However, the caretaker itself can not access any of the values stored in the memento.

04
In my example I do this by having memento only allow calls to it’s get and set functions in which it is passed a BookReader object. The BookMark can then get or set the titles or pages for a bookreader object it is passed. The downside of my implementation is that I have BookReader’s get and set functions as public.
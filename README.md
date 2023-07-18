# php-laracasts

simple &amp; short php lessons from laracasts

## 11. Technical Check-In (with Quiz)

1. Which character is required at the beginning of any PHP variable?

   ```php
   ...name = "Joe";
   ```

   A. % <br>
   B. $ <br>
   C. \* <br>
   D. @

2. To render a string on the page, which PHP keyword might we use?

   ```php
   ..."Hello World";
   ```

   A. display <br>
   B. show <br>
   C. put <br>
   D. echo

3. What is the correct syntax for creating a list of, say, popular baby names?

   ```php
   $popularNames = ...;
   ```

   A: {'Oliver', 'Violet', 'Noah', 'Aurora'} <br>
   B: ['Oliver' 'Violet' 'Noah' 'Aurora'] <br>
   C: Arrizay('Oliver', 'Violet', 'Noah', 'Aurora') <br>
   D: ['Oliver', 'Violet', 'Noah', 'Aurora']

4. True or False: Arrays can optionally include keys.

   A: True <br>
   B: False

5. What is the correct syntax for creating a list of, say, popular baby names?

   ```php
   $post = ...;
   ```

   A: [ 'title': 'My Blog Post', 'author': 'LaryRobot' ] <br>
   B: [ 'title' => 'My Blog Post', 'author' => 'LaryRobot' ] <br>
   C: [ title => My Blog Post, author => LaryRobot ] <br>
   D: [ title: 'My Blog Post', author: 'LaryRobot' ]

6. How might we check if the appointment has NOT been confirmed?

   ```php
   $confirmed = false;
   if (...) {
       echo 'This appointment has not yet been confirmed.';
   }
   ```

   A: $confirmed <br>
   B: ! $confirmed <br>
   C: is not $confirmed <br>
   D: !! $confirmed

7. Which keyword might we use to loop over a list of books?

   ```php
   $books = ['Frankenstein', 'Animal Farm', '1984'];
   ... ($books as $book) {
       echo $book;
   }
   ```

   A: foreach <br>
   B: for each <br>
   C: iterate <br>
   D: loop

8. If a function should return a value, which keyword should we use?

   ```php
   function greet($thing) {
       ... "Hello there, {$thing}";
   }
   ```

   A: send <br>
   B: respond <br>
   C: return <br>
   D: back

9. What might we call a function that does not have a name?

   ```php
   $isAdult = function ($person) {
       return $person['age'] >= 18;
   }

   $adults = array_filter($people, $isAdult);
   ```

   A: invalid <br>
   B: unnamed <br>
   C: unassigned <br>
   D: anonymous

10. What is the correct way to determine equality?

    ```php
    function isManager($person) {
        return $person['role'] ... 'Manager';
    }
    ```

    A: = <br>
    B: === <br>
    C: <===> <br>
    D: equals

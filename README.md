# php-laracasts

simple &amp; short php lessons from laracasts

Table of Contents

## 11. Technical Check-In (with Quiz)

1. Question
   Which character is required at the beginning of any PHP variable?

...name = "Joe";

A. %
B. $
C. \*
D. @

2. Question
   To render a string on the page, which PHP keyword might we use?

..."Hello World";

A. display
B. show
C. put
D. echo

3. Question
   What is the correct syntax for creating a list of, say, popular baby names?

$popularNames = ...;

A: {'Oliver', 'Violet', 'Noah', 'Aurora'}
B: ['Oliver' 'Violet' 'Noah' 'Aurora']
C: Arrizay('Oliver', 'Violet', 'Noah', 'Aurora')
D: ['Oliver', 'Violet', 'Noah', 'Aurora']

4. Question
   True or False: Arrays can optionally include keys.

A: True
B: False

5. Question
   What is the correct syntax for creating a list of, say, popular baby names?

$post = ...;

A: [ 'title': 'My Blog Post', 'author': 'LaryRobot' ]
B: [ 'title' => 'My Blog Post', 'author' => 'LaryRobot' ]
C: [ title => My Blog Post, author => LaryRobot ]
D: [ title: 'My Blog Post', author: 'LaryRobot' ]

6. Question
   How might we check if the appointment has NOT been confirmed?

$confirmed = false;
if (...) {
echo 'This appointment has not yet been confirmed.';
}

A: $confirmed
B: ! $confirmed
C: is not $confirmed
D: !! $confirmed

7. Question
   Which keyword might we use to loop over a list of books?

$books = ['Frankenstein', 'Animal Farm', '1984'];
... ($books as $book) {
echo $book;
}

A: foreach
B: for each
C: iterate
D: loop

8. Question
   If a function should return a value, which keyword should we use?

function greet($thing) {
   ... "Hello there, {$thing}";
}

A: send
B: respond
C: return
D: back

9. Question
   What might we call a function that does not have a name?

$isAdult = function ($person) {
return $person['age'] >= 18;
}

$adults = array_filter($people, $isAdult);

A: invalid
B: unnamed
C: unassigned
D: annonymous

10. Question
    What is the correct way to determine equality?

function isManager($person) {
return $person['role'] ... 'Manager';
}

A: =
B: ===
C: <===>
D: equals

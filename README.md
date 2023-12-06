# Code convention

## Naming

1. mySQL tables will always be lowercase and plural: items, cars
2. Models will always be singular and first letter capital: Item, Car
3. Controllers will always have "Controller" appended to them: ItemsController, CarsController
4. Views will have plural name followed by action name as the file: items/view.php, cars/buys.php

## File explain

config/inflection.php : use irregular world.

config/routing.php : specify default controller and action. We can also specify custom redirects using regular expression.

library/cache.class.php : the data is in a flat text-file in the cache directory. Currently only describe function of the SQLQuery class uses this cache function.

library/html.class.php : used to aid the template class. It allow you to use a few standard function for create link, adding js and css.

library/inflection.class.php :

library/template.class.php : this can be use AJAX call when you do not want to return the headers.

library/sqlquery.class.php:

    - save(): must be used from the controller. It can have two option - if an id is set, then it will update the entry; if not it will create a new entry.

    - delete(): enables you to delete a record from the table.

## Relationship

1:1 : suppose each student has one mentor and each mentor has only a student. Then in the student table has a field call mentor_id

1:n : suppose each parent can have many childrent. Then the children has table field called "parent_id"

n:n : suppose students has many and belongs to many teachers, then a new tables called students_teachers with three fields: id, student_id, teacher_id

## Use case

User

![Use case](./public/img/use_case_1.jpg 'Use case')

Admin

![Use case](./public/img/use_case_2.jpg 'Use case')

## Demo

![Use case](./public/img/homepage.png 'Use case')

![Use case](./public/img/user_recommend.png 'Use case')

![Use case](./public/img/user_buy.png 'Use case')

![Use case](./public/img/admin_manage_post.png 'Use case')

## Team size

4 people
+ Quan
+ Nam
+ Hang
+ Duyen
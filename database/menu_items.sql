insert into menu_items (menutype_id,lang,parent,node,name,url)
values 
(3,'ru',null,0,'Контакты','contacts'),
(3,'ru',null,0,'Статьи','articles.html'),
(3,'ru',null,0,'О нас',''),

(4,'ru',null,0,'Образование за рубежем','obrazovanie_za_rubezhom.html'),
(4,'ru',null,0,'Каникулы','category/holidays/'),
(4,'ru',null,0,'Высшее образование','category/higher_education'),
(4,'ru',null,0,'Среднее образование','category/second_education'),
(4,'ru',null,0,'Подготовка к университету','category/pre-university/'),
(4,'ru',null,0,'Бизнесменам','category/lang_course/'),
(4,'ru',null,0,'Языковые курсы','category/language_abroad.html');


insert into menu_items (menutype_id,lang,parent,node,name,url,img)
values 
(5,'ru',null,0,'Каникулы','category/holidays/','mainprogramm/holidays.jpg'),
(5,'ru',null,0,'Высшее образование','category/higher_education','mainprogramm/higher_education.jpg'),
(5,'ru',null,0,'Среднее образование','category/second_education','mainprogramm/second_education.jpg'),
(5,'ru',null,0,'Подготовка к университету','category/pre-university/','mainprogramm/pre-university.jpg'),
(5,'ru',null,0,'Бизнесменам','category/lang_course/','mainprogramm/lang_course.jpg'),
(5,'ru',null,0,'Языковые курсы','category/language_abroad.html','mainprogramm/language_abroad.jpg');

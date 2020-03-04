alter table menutypes add column view varchar(100);
update menutypes set view='widgets.menu' where id = 1;
update menutypes set view='widgets.links' where id = 2;
update menutypes set view='widgets.links' where id = 3;
update menutypes set view='widgets.links' where id = 4;
update menutypes set view='widgets.programm' where id = 5;
update menutypes set view='widgets.social' where id = 6;
update menutypes set name='programm' where id = 5;




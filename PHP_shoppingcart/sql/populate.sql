USE book_sc;


INSERT INTO books VALUES ('0672317842','Luke Welling and Laura Thomson','PHP and MySQL Web Development',1,49.99,
'PHP & MySQL Web Development teaches the reader to develop dynamic, secure e-commerce web sites. You will learn to integrate and implement these technologies by following real-world examples and working sample projects.');
INSERT INTO books VALUES ('0672318040','Matt Zandstra','Sams Teach Yourself PHP4 in 24 Hours',1,24.99,
'Consisting of 24 one-hour lessons, Sams Teach Yourself PHP4 in 24 Hours is divided into five sections that guide you through the language from the basics to the advanced functions.');
INSERT INTO books VALUES ('0672319241','Sterling Hughes and Andrei Zmi','PHP Developer\'s Cookbook',1,39.99,
'Provides a complete, solutions-oriented guide to the challenges most often faced by PHP developers\r\nWritten specifically for experienced Web developers, the book offers real-world solutions to real-world needs\r\n');

INSERT INTO categories VALUES (1,'Internet');
INSERT INTO categories VALUES (2,'Self-help');
INSERT INTO categories VALUES (5,'Fiction');
INSERT INTO categories VALUES (4,'Gardening');

INSERT INTO admin VALUES ('admin', sha1('admin'));

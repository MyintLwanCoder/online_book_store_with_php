// create database;
// use db;

create database school;

// create table;
create table books(
    id int primary key auto_increment,
    title varchar(225) not null,
    author varchar(225) not null,
    summary Text not null,
    price float not null,
    category_id int not null,
    qty int not null,
    cover varchar(225) not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp);

    -- insert data to book table;
    insert into book(title, author, summary, price, category_id, qty, cover) values('The Lord of the Rings', 'J.R.R. Tolkien', 'The Lord of the Rings is an epic high fantasy novel written by English author and scholar J. R. R. Tolkien', '$10.00', 1, 10, 'https://images-na.ssl-images-amazon.com/images/I/51ZrKb%2BQWL._SX331_BO1,204,203,200_.jpg');

    insert into book(title, author, summary, price, category_id, qty, cover) values('The Hobbit', 'J.R.R. Tolkien', 'The Hobbit, or There and Back Again, is a children''s fantasy novel by English author J. R. R. Tolkien. It is the sequel to The Lord of the Rings and The Silmarillion', '$10.00', 1, 10, 'https://images-na.ssl-images-amazon.com/images/I/51ZrKb%2BQWL._SX331_BO1,204,203,200_.jpg');

    insert into book (title, author, summary, price, category_id, qty, cover) values('The Hunger Games', 'Suzanne Collins', 'The Hunger Games is a 2008 science fiction novel written by American author Suzanne Collins. It chronicles the events of a Pan-African nation under the leadership of the 16-year-old Katniss Everdeen, who is forced to live in the ruins of the Capitol after the events of the events of the first novel, The Eye of the World', '$10.00', 1, 10, 'https://images-na.ssl-images-amazon.com/images/I/51ZrKb%2BQWL._SX331_BO1,204,203,200_.jpg');


    insert into book(title, author, summary, price, category_id, qty, cover) values('The Chronicles of Narnia', 'C.S. Lewis', 'The Chronicles of Narnia is a fantasy novel by British author C. S. Lewis. It is the first of five volumes in The Chronicles of Narnia, and the main story arc of the fantasy series. The book was published on 1 November 2005 by Bloomsbury in the United Kingdom and on 25 November 2005 in the United Kingdom, the United States, and Canada', '$10.00', 1, 10, 'https://images-na.ssl-images-amazon.com/images/I/51ZrKb%2BQWL._SX331_BO1,204,203,200_.jpg');

    insert into book(title, author, summary, price, category_id, qty, cover) values('The Chronicles of Narnia', 'C.S. Lewis', 'The Chronicles of Narnia is a fantasy novel by British author C. S. Lewis. It is the first of five volumes in The Chronicles of Narnia, and the main story arc of the fantasy series. The book was published on 1 November 2005 by Bloomsbury in the United Kingdom and on 25 November 2005 in the United Kingdom, the United States, and Canada', '$10.00', 1, 10, 'https://images-na.ssl-images-amazon.com/images/I/51ZrKb%2BQWL._SX331_BO1,204,203,200_.jpg');

    insert into book(title, author, summary, price, category_id, qty, cover) values('The Chronicles of Narnia', 'C.S. Lewis', 'The Chronicles of Narnia is a fantasy novel by British author C. S. Lewis. It is the first of five volumes in The Chronicles of Narnia, and the main story arc of the fantasy series. The book was published on 1 November 2005 by Bloomsbury in the United Kingdom and on 25 November 2005 in the United Kingdom, the United States, and Canada', '$10.00', 1, 10, 'https://images-na.ssl-images-amazon.com/images/I/51ZrKb%2BQWL._SX331_BO1,204,203,200_.jpg');


-- create table orders;
create table orders(
    id int primary key auto_increment,
    name varchar(225) not null,
    email varchar(225) not null,
    phone varchar(225) not null,
    address Text not null,
    status int not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp);


-- insert in to orders table;
insert into orders(name, email, phone, address, status) values('John Doe', 'johndoe@gmail.com', '09123456789', '123 Fake Street, New York, NY 10001', 1);
insert into orders(name, email, phone, address, status) values('Jane Doe', 'janedoe@gmail.com', '09123456789', '123 Fake Street, New York, NY 10001', 2);

-- create table order_items;
create table order_items(
    id int primary key auto_increment,
    book_id int not null,
    order_id int not null,
    qty int not null
    );

insert into order_items(book_id, order_id, qty) values(1, 1, 1);
insert into order_items(book_id, order_id, qty) values(2, 1, 1);
insert into order_items(book_id, order_id, qty) values(3, 1, 1);
insert into order_items(book_id, order_id, qty) values(4, 1, 1);

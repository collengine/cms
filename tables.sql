DROP TABLE IF EXISTS articles;
CREATE TABLE articles
(
  id              smallint unsigned NOT NULL auto_increment,
  publicationDate date NOT NULL,                              
  title           varchar(255) NOT NULL,                     
  summary         text NOT NULL, 
  genre           text NOT NULL, 
  publisher       text NOT NULL, 
  author          text NOT NULL,
  image           varchar(255) NOT NULL,       
  content         mediumtext NOT NULL,                        

  PRIMARY KEY     (id)
);
CREATE user peter identified by 'passwd';
grant all on * to peter;
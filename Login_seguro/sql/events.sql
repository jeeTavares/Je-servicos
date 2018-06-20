CREATE TABLE IF NOT EXISTS 'comdeslocacao' (
  'id' INT NOT NULL AUTO_INCREMENT,
  'idregist' VARCHAR(10) NOT NULL,
  'nome' VARCHAR(50) NOT NULL,
  PRIMARY KEY (id));

CREATE TABLE IF NOT EXISTS 'semdeslocacao'(
  'id' INT NOT NULL AUTO_INCREMENT,
  'idregist' VARCHAR(10) NOT NULL,
  'nome' VARCHAR(50) NOT NULL,
  PRIMARY KEY (id));
  
CREATE TABLE IF NOT EXISTS 'regist' (
  'id' int(10) unsigned NOT NULL auto_increment,
  'idusers' varchar(10) NOT NULL,
  'nome' varchar(50) NOT NULL,
  'locale' varchar(60) NOT NULL,
  'organizer' varchar(60) NOT NULL,
  'date_time' datetime NOT NULL,
  'dislocation' BOOLEAN NOT NULL,
  'grades' varchar(100),
  PRIMARY KEY  ('id'),
  KEY 'nome' ('nome')
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS 'horario' (
  'id' VARCHAR(10) NOT NULL,
  'nome' VARCHAR(50) NOT NULL,
  PRIMARY KEY (id));
 
CREATE TABLE IF NOT EXISTS 'piquet' (
  'id' INT NOT NULL AUTO_INCREMENT,
  'idhorario' VARCHAR(10) NOT NULL,
  'nome' VARCHAR(50) NOT NULL,
  'start_time' time NOT NULL,
  'end_time' time NOT NULL,
  PRIMARY KEY (id))ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
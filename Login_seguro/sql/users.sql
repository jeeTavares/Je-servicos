CREATE DATABASE IF NOT EXISTS 'jornaleconomico' DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE 'jornaleconomico';

-- Estrutura da tabela `users`
CREATE TABLE IF NOT EXISTS 'users' (
  'user_id' int(10) unsigned NOT NULL auto_increment,
  'name' varchar(50) NOT NULL,
  'email' varchar(60) NOT NULL,
  'password' varchar(60) NOT NULL,
  'created' datetime NOT NULL,
  PRIMARY KEY  ('user_id'),
  KEY 'email' ('email'),
  KEY 'login' ('pws')
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

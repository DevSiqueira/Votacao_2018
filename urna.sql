

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `candidatos` (
  `id_candidatos` int PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `candidatura` enum ('s', 'g', 'p') NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `qnt_voto` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `candidatos` (`id_candidatos`, `nome`, `candidatura`, `imagem`, `qnt_voto`) VALUES
('Ciro Gomes', 'p', 'ciro.jpg', 0),
('Jair Bolsonaro', 'p', 'bolsonaro.jpg', 0),
('Fernando Haddad', 'p', 'haddad.jpg', 0),

('Alexandre Motta', 's', 'motta.jpg', 0),
('Capitão Styvenson', 's', 'styvenson.jpg', 0),
('Dra. Zenaide Maia', 's', 'zenaide.jpg', 0),
('Garibaldi Filho', 's', 'garibaldi.jpg', 0),
('Geraldo Melo', 's', 'geraldo.jpg', 0),
('Jácome', 's', 'jacome.jpg', 0),

('Robinson Faria', 'g', 'robinson.jpg', 0),
('Carlos Eduardo', 'g', 'eduardo.jpg', 0),
('Fátima Bezerra', 'g', 'fatima.jpg', 0);






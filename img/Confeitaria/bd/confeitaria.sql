-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para confeitaria
CREATE DATABASE IF NOT EXISTS `confeitaria` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `confeitaria`;

-- Copiando estrutura para tabela confeitaria.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `cod_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(50) NOT NULL DEFAULT '',
  `descricao` varchar(500) NOT NULL DEFAULT '',
  `valor` varchar(50) NOT NULL DEFAULT '0',
  `foto_produto` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`cod_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela confeitaria.produtos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`cod_produto`, `nome_produto`, `descricao`, `valor`, `foto_produto`) VALUES
	(8, 'Copo da Felicidade', 'Copo da Felicidade como o próprio nome diz  tem sabor de pura felicidade!!! Pode ser composto com tudo aquilo que mais gostar, é só usar a criatividade. Tá valendo frutas, bombons, bolo, brownie… e muito mais gostosuras.', '15,00', 'img/produtos/1621529859.jpg'),
	(9, 'Copo da Felicidade', 'Copo da Felicidade como o próprio nome diz  tem sabor de pura felicidade!!! Pode ser composto com tudo aquilo que mais gostar, é só usar a criatividade. Tá valendo frutas, bombons, bolo, brownie… e muito mais gostosuras.\r\n\r\n-> Chocolate', '17,50', 'img/produtos/1621530004.jpg'),
	(10, 'Copo da Felicidade', 'Copo da Felicidade como o próprio nome diz  tem sabor de pura felicidade!!! Pode ser composto com tudo aquilo que mais gostar, é só usar a criatividade. Tá valendo frutas, bombons, bolo, brownie… e muito mais gostosuras.', '12,00', 'img/produtos/1621530369.jpg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela confeitaria.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` varchar(50) NOT NULL DEFAULT '',
  `senha_usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela confeitaria.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `senha_usuario`) VALUES
	('grupo', '1234');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

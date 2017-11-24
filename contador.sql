#
# Creación de la tabla 'estadisticas'
#

CREATE TABLE estadisticas (
  mes tinyint(3) unsigned NOT NULL default '0',
  anio int(3) unsigned NOT NULL default '0',
  visitas int(3) unsigned NOT NULL default '0',
  KEY mes (mes,anio)
) TYPE=MyISAM;


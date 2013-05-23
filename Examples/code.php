<?php

/**
 * Clase encargada de la auto-carga de clases en la libreria.
 */
require_once '../Core/Loader.php';

/**
 * Carga de namespace
 */
use ReportExpress\Core\Loader,
    ReportExpress\ReportExpress;


/**
 * Se registra la direccion a la libreria.
 */
Loader::register(realpath(__DIR__ . '/../../'));

/**
 * Datos de prueba, que pueden ser los resultantes de una consulta o un codigo especifico.
 */
$bulkdata = array(array('ORDERID' => 10248, 'CUSTOMERID' => 'VINET', 'EMPLOYEEID' => 5, 'ORDERDATE' => '1996-07-04 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-01 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-16 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 32.38, 'SHIPNAME' => 'Vins et alcools Chevalier', 'SHIPADDRESS' => '59 rue de lAbbaye', 'SHIPCITY' => 'Reims', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '51100', 'SHIPCOUNTRY' => 'France'), array('ORDERID' => 10249, 'CUSTOMERID' => 'TOMSP', 'EMPLOYEEID' => 6, 'ORDERDATE' => '1996-07-05 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-16 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-10 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 11.61, 'SHIPNAME' => 'Toms Spezialit√§ten', 'SHIPADDRESS' => 'Luisenstr. 48', 'SHIPCITY' => 'M√ºnster', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '44087', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10250, 'CUSTOMERID' => 'HANAR', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-07-08 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-05 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-12 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 65.83, 'SHIPNAME' => 'Hanari Carnes', 'SHIPADDRESS' => 'Rua do Pa√Éo, 67', 'SHIPCITY' => 'Rio de Janeiro', 'SHIPREGION' => 'RJ', 'SHIPPOSTALCODE' => '05454-876', 'SHIPCOUNTRY' => 'Brazil'), array('ORDERID' => 10251, 'CUSTOMERID' => 'VICTE', 'EMPLOYEEID' => 3, 'ORDERDATE' => '1996-07-08 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-05 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-15 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 41.34, 'SHIPNAME' => 'Victuailles en stock', 'SHIPADDRESS' => '2, rue du Commerce', 'SHIPCITY' => 'Lyon', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '69004', 'SHIPCOUNTRY' => 'France'), array('ORDERID' => 10252, 'CUSTOMERID' => 'SUPRD', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-07-09 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-06 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-11 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 51.3, 'SHIPNAME' => 'Supr√™mes d√©lices', 'SHIPADDRESS' => 'Boulevard Tirou, 255', 'SHIPCITY' => 'Charleroi', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => 'B-6000', 'SHIPCOUNTRY' => 'Belgium'), array('ORDERID' => 10253, 'CUSTOMERID' => 'HANAR', 'EMPLOYEEID' => 3, 'ORDERDATE' => '1996-07-10 00:00:00.000000000', 'REQUIREDDATE' => '1996-07-24 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-16 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 58.17, 'SHIPNAME' => 'Hanari Carnes', 'SHIPADDRESS' => 'Rua do Pa√Éo, 67', 'SHIPCITY' => 'Rio de Janeiro', 'SHIPREGION' => 'RJ', 'SHIPPOSTALCODE' => '05454-876', 'SHIPCOUNTRY' => 'Brazil'), array('ORDERID' => 10254, 'CUSTOMERID' => 'CHOPS', 'EMPLOYEEID' => 5, 'ORDERDATE' => '1996-07-11 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-08 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-23 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 22.98, 'SHIPNAME' => 'Chop-suey Chinese', 'SHIPADDRESS' => 'Hauptstr. 31', 'SHIPCITY' => 'Bern', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '3012', 'SHIPCOUNTRY' => 'Switzerland'), array('ORDERID' => 10255, 'CUSTOMERID' => 'RICSU', 'EMPLOYEEID' => 9, 'ORDERDATE' => '1996-07-12 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-09 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-15 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 148.33, 'SHIPNAME' => 'Richter Supermarkt', 'SHIPADDRESS' => 'Starenweg 5', 'SHIPCITY' => 'Gen√®ve', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '1204', 'SHIPCOUNTRY' => 'Switzerland'), array('ORDERID' => 10256, 'CUSTOMERID' => 'WELLI', 'EMPLOYEEID' => 3, 'ORDERDATE' => '1996-07-15 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-12 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-17 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 13.97, 'SHIPNAME' => 'Wellington Importadora', 'SHIPADDRESS' => 'Rua do Mercado, 12', 'SHIPCITY' => 'Resende', 'SHIPREGION' => 'SP', 'SHIPPOSTALCODE' => '08737-363', 'SHIPCOUNTRY' => 'Brazil'), array('ORDERID' => 10257, 'CUSTOMERID' => 'HILAA', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-07-16 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-13 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-22 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 81.91, 'SHIPNAME' => 'HILARION-Abastos', 'SHIPADDRESS' => 'Carrera 22 con Ave. Carlos Soublette #8-35', 'SHIPCITY' => 'San Crist√≥bal', 'SHIPREGION' => 'T√°chira', 'SHIPPOSTALCODE' => '5022', 'SHIPCOUNTRY' => 'Venezuela'), array('ORDERID' => 10258, 'CUSTOMERID' => 'ERNSH', 'EMPLOYEEID' => 1, 'ORDERDATE' => '1996-07-17 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-14 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-23 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 140.51, 'SHIPNAME' => 'Ernst Handel', 'SHIPADDRESS' => 'Kirchgasse 6', 'SHIPCITY' => 'Graz', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '8010', 'SHIPCOUNTRY' => 'Austria'), array('ORDERID' => 10259, 'CUSTOMERID' => 'CENTC', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-07-18 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-15 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-25 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 3.25, 'SHIPNAME' => 'Centro comercial Moctezuma', 'SHIPADDRESS' => 'Sierras de Granada 9993', 'SHIPCITY' => 'M√©xico D.F.', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '05022', 'SHIPCOUNTRY' => 'Mexico'), array('ORDERID' => 10260, 'CUSTOMERID' => 'OTTIK', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-07-19 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-16 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-29 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 55.09, 'SHIPNAME' => 'Ottilies K√§seladen', 'SHIPADDRESS' => 'Mehrheimerstr. 369', 'SHIPCITY' => 'K√∂ln', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '50739', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10261, 'CUSTOMERID' => 'QUEDE', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-07-19 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-16 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-30 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 3.05, 'SHIPNAME' => 'Que Del√≠cia', 'SHIPADDRESS' => 'Rua da Panificadora, 12', 'SHIPCITY' => 'Rio de Janeiro', 'SHIPREGION' => 'RJ', 'SHIPPOSTALCODE' => '02389-673', 'SHIPCOUNTRY' => 'Brazil'), array('ORDERID' => 10262, 'CUSTOMERID' => 'RATTC', 'EMPLOYEEID' => 8, 'ORDERDATE' => '1996-07-22 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-19 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-25 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 48.29, 'SHIPNAME' => 'Rattlesnake Canyon Grocery', 'SHIPADDRESS' => '2817 Milton Dr.', 'SHIPCITY' => 'Albuquerque', 'SHIPREGION' => 'NM', 'SHIPPOSTALCODE' => '87110', 'SHIPCOUNTRY' => 'USA'), array('ORDERID' => 10263, 'CUSTOMERID' => 'ERNSH', 'EMPLOYEEID' => 9, 'ORDERDATE' => '1996-07-23 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-20 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-31 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 146.06, 'SHIPNAME' => 'Ernst Handel', 'SHIPADDRESS' => 'Kirchgasse 6', 'SHIPCITY' => 'Graz', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '8010', 'SHIPCOUNTRY' => 'Austria'), array('ORDERID' => 10264, 'CUSTOMERID' => 'FOLKO', 'EMPLOYEEID' => 6, 'ORDERDATE' => '1996-07-24 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-21 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-23 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 3.67, 'SHIPNAME' => 'Folk och f√§ HB', 'SHIPADDRESS' => '√Ökergatan 24', 'SHIPCITY' => 'Br√§cke', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => 'S-844 67', 'SHIPCOUNTRY' => 'Sweden'), array('ORDERID' => 10265, 'CUSTOMERID' => 'BLONP', 'EMPLOYEEID' => 2, 'ORDERDATE' => '1996-07-25 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-22 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-12 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 55.28, 'SHIPNAME' => 'Blondel p√®re et fils', 'SHIPADDRESS' => '24, place Kl√©ber', 'SHIPCITY' => 'Strasbourg', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '67000', 'SHIPCOUNTRY' => 'France'), array('ORDERID' => 10266, 'CUSTOMERID' => 'WARTH', 'EMPLOYEEID' => 3, 'ORDERDATE' => '1996-07-26 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-06 00:00:00.000000000', 'SHIPPEDDATE' => '1996-07-31 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 25.73, 'SHIPNAME' => 'Wartian Herkku', 'SHIPADDRESS' => 'Torikatu 38', 'SHIPCITY' => 'Oulu', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '90110', 'SHIPCOUNTRY' => 'Finland'), array('ORDERID' => 10267, 'CUSTOMERID' => 'FRANK', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-07-29 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-26 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-06 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 208.58, 'SHIPNAME' => 'Frankenversand', 'SHIPADDRESS' => 'Berliner Platz 43', 'SHIPCITY' => 'M√ºnchen', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '80805', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10268, 'CUSTOMERID' => 'GROSR', 'EMPLOYEEID' => 8, 'ORDERDATE' => '1996-07-30 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-27 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-02 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 66.29, 'SHIPNAME' => 'GROSELLA-Restaurante', 'SHIPADDRESS' => '5¬™ Ave. Los Palos Grandes', 'SHIPCITY' => 'Caracas', 'SHIPREGION' => 'DF', 'SHIPPOSTALCODE' => '1081', 'SHIPCOUNTRY' => 'Venezuela'), array('ORDERID' => 10269, 'CUSTOMERID' => 'WHITC', 'EMPLOYEEID' => 5, 'ORDERDATE' => '1996-07-31 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-14 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-09 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 4.56, 'SHIPNAME' => 'White Clover Markets', 'SHIPADDRESS' => '1029 - 12th Ave. S.', 'SHIPCITY' => 'Seattle', 'SHIPREGION' => 'WA', 'SHIPPOSTALCODE' => '98124', 'SHIPCOUNTRY' => 'USA'), array('ORDERID' => 10270, 'CUSTOMERID' => 'WARTH', 'EMPLOYEEID' => 1, 'ORDERDATE' => '1996-08-01 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-29 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-02 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 136.54, 'SHIPNAME' => 'Wartian Herkku', 'SHIPADDRESS' => 'Torikatu 38', 'SHIPCITY' => 'Oulu', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '90110', 'SHIPCOUNTRY' => 'Finland'), array('ORDERID' => 10271, 'CUSTOMERID' => 'SPLIR', 'EMPLOYEEID' => 6, 'ORDERDATE' => '1996-08-01 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-29 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-30 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 4.54, 'SHIPNAME' => 'Split Rail Beer & Ale', 'SHIPADDRESS' => 'P.O. Box 555', 'SHIPCITY' => 'Lander', 'SHIPREGION' => 'WY', 'SHIPPOSTALCODE' => '82520', 'SHIPCOUNTRY' => 'USA'), array('ORDERID' => 10272, 'CUSTOMERID' => 'RATTC', 'EMPLOYEEID' => 6, 'ORDERDATE' => '1996-08-02 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-30 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-06 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 98.03, 'SHIPNAME' => 'Rattlesnake Canyon Grocery', 'SHIPADDRESS' => '2817 Milton Dr.', 'SHIPCITY' => 'Albuquerque', 'SHIPREGION' => 'NM', 'SHIPPOSTALCODE' => '87110', 'SHIPCOUNTRY' => 'USA'), array('ORDERID' => 10273, 'CUSTOMERID' => 'QUICK', 'EMPLOYEEID' => 3, 'ORDERDATE' => '1996-08-05 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-02 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-12 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 76.07, 'SHIPNAME' => 'QUICK-Stop', 'SHIPADDRESS' => 'Taucherstra√üe 10', 'SHIPCITY' => 'Cunewalde', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '01307', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10274, 'CUSTOMERID' => 'VINET', 'EMPLOYEEID' => 6, 'ORDERDATE' => '1996-08-06 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-03 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-16 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 6.01, 'SHIPNAME' => 'Vins et alcools Chevalier', 'SHIPADDRESS' => '59 rue de lAbbaye', 'SHIPCITY' => 'Reims', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '51100', 'SHIPCOUNTRY' => 'France'), array('ORDERID' => 10275, 'CUSTOMERID' => 'MAGAA', 'EMPLOYEEID' => 1, 'ORDERDATE' => '1996-08-07 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-04 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-09 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 26.93, 'SHIPNAME' => 'Magazzini Alimentari Riuniti', 'SHIPADDRESS' => 'Via Ludovico il Moro 22', 'SHIPCITY' => 'Bergamo', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '24100', 'SHIPCOUNTRY' => 'Italy'), array('ORDERID' => 10276, 'CUSTOMERID' => 'TORTU', 'EMPLOYEEID' => 8, 'ORDERDATE' => '1996-08-08 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-22 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-14 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 13.84, 'SHIPNAME' => 'Tortuga Restaurante', 'SHIPADDRESS' => 'Avda. Azteca 123', 'SHIPCITY' => 'M√©xico D.F.', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '05033', 'SHIPCOUNTRY' => 'Mexico'), array('ORDERID' => 10277, 'CUSTOMERID' => 'MORGK', 'EMPLOYEEID' => 2, 'ORDERDATE' => '1996-08-09 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-06 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-13 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 125.77, 'SHIPNAME' => 'Morgenstern Gesundkost', 'SHIPADDRESS' => 'Heerstr. 22', 'SHIPCITY' => 'Leipzig', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '04179', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10278, 'CUSTOMERID' => 'BERGS', 'EMPLOYEEID' => 8, 'ORDERDATE' => '1996-08-12 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-09 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-16 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 92.69, 'SHIPNAME' => 'Berglunds snabbk√∂p', 'SHIPADDRESS' => 'Berguvsv√§gen 8', 'SHIPCITY' => 'Lule√•', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => 'S-958 22', 'SHIPCOUNTRY' => 'Sweden'), array('ORDERID' => 10279, 'CUSTOMERID' => 'LEHMS', 'EMPLOYEEID' => 8, 'ORDERDATE' => '1996-08-13 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-10 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-16 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 25.83, 'SHIPNAME' => 'Lehmanns Marktstand', 'SHIPADDRESS' => 'Magazinweg 7', 'SHIPCITY' => 'Frankfurt a.M.', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '60528', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10280, 'CUSTOMERID' => 'BERGS', 'EMPLOYEEID' => 2, 'ORDERDATE' => '1996-08-14 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-11 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-12 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 8.98, 'SHIPNAME' => 'Berglunds snabbk√∂p', 'SHIPADDRESS' => 'Berguvsv√§gen 8', 'SHIPCITY' => 'Lule√•', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => 'S-958 22', 'SHIPCOUNTRY' => 'Sweden'), array('ORDERID' => 10281, 'CUSTOMERID' => 'ROMEY', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-08-14 00:00:00.000000000', 'REQUIREDDATE' => '1996-08-28 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-21 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 2.94, 'SHIPNAME' => 'Romero y tomillo', 'SHIPADDRESS' => 'Gran V√≠a, 1', 'SHIPCITY' => 'Madrid', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '28001', 'SHIPCOUNTRY' => 'Spain'), array('ORDERID' => 10282, 'CUSTOMERID' => 'ROMEY', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-08-15 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-12 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-21 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 12.69, 'SHIPNAME' => 'Romero y tomillo', 'SHIPADDRESS' => 'Gran V√≠a, 1', 'SHIPCITY' => 'Madrid', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '28001', 'SHIPCOUNTRY' => 'Spain'), array('ORDERID' => 10283, 'CUSTOMERID' => 'LILAS', 'EMPLOYEEID' => 3, 'ORDERDATE' => '1996-08-16 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-13 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-23 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 84.81, 'SHIPNAME' => 'LILA-Supermercado', 'SHIPADDRESS' => 'Carrera 52 con Ave. Bol√≠var #65-98 Llano Largo', 'SHIPCITY' => 'Barquisimeto', 'SHIPREGION' => 'Lara', 'SHIPPOSTALCODE' => '3508', 'SHIPCOUNTRY' => 'Venezuela'), array('ORDERID' => 10284, 'CUSTOMERID' => 'LEHMS', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-08-19 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-16 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-27 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 76.56, 'SHIPNAME' => 'Lehmanns Marktstand', 'SHIPADDRESS' => 'Magazinweg 7', 'SHIPCITY' => 'Frankfurt a.M.', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '60528', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10285, 'CUSTOMERID' => 'QUICK', 'EMPLOYEEID' => 1, 'ORDERDATE' => '1996-08-20 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-17 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-26 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 76.83, 'SHIPNAME' => 'QUICK-Stop', 'SHIPADDRESS' => 'Taucherstra√üe 10', 'SHIPCITY' => 'Cunewalde', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '01307', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10286, 'CUSTOMERID' => 'QUICK', 'EMPLOYEEID' => 8, 'ORDERDATE' => '1996-08-21 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-18 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-30 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 229.24, 'SHIPNAME' => 'QUICK-Stop', 'SHIPADDRESS' => 'Taucherstra√üe 10', 'SHIPCITY' => 'Cunewalde', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '01307', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10287, 'CUSTOMERID' => 'RICAR', 'EMPLOYEEID' => 8, 'ORDERDATE' => '1996-08-22 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-19 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-28 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 12.76, 'SHIPNAME' => 'Ricardo Adocicados', 'SHIPADDRESS' => 'Av. Copacabana, 267', 'SHIPCITY' => 'Rio de Janeiro', 'SHIPREGION' => 'RJ', 'SHIPPOSTALCODE' => '02389-890', 'SHIPCOUNTRY' => 'Brazil'), array('ORDERID' => 10288, 'CUSTOMERID' => 'REGGC', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-08-23 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-20 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-03 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 7.45, 'SHIPNAME' => 'Reggiani Caseifici', 'SHIPADDRESS' => 'Strada Provinciale 124', 'SHIPCITY' => 'Reggio Emilia', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '42100', 'SHIPCOUNTRY' => 'Italy'), array('ORDERID' => 10289, 'CUSTOMERID' => 'BSBEV', 'EMPLOYEEID' => 7, 'ORDERDATE' => '1996-08-26 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-23 00:00:00.000000000', 'SHIPPEDDATE' => '1996-08-28 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 22.77, 'SHIPNAME' => 'Bs Beverages', 'SHIPADDRESS' => 'Fauntleroy Circus', 'SHIPCITY' => 'London', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => 'EC2 5NT', 'SHIPCOUNTRY' => 'UK'), array('ORDERID' => 10290, 'CUSTOMERID' => 'COMMI', 'EMPLOYEEID' => 8, 'ORDERDATE' => '1996-08-27 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-24 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-03 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 79.7, 'SHIPNAME' => 'Com√©rcio Mineiro', 'SHIPADDRESS' => 'Av. dos Lus√≠adas, 23', 'SHIPCITY' => 'Sao Paulo', 'SHIPREGION' => 'SP', 'SHIPPOSTALCODE' => '05432-043', 'SHIPCOUNTRY' => 'Brazil'), array('ORDERID' => 10291, 'CUSTOMERID' => 'QUEDE', 'EMPLOYEEID' => 6, 'ORDERDATE' => '1996-08-27 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-24 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-04 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 6.4, 'SHIPNAME' => 'Que Del√≠cia', 'SHIPADDRESS' => 'Rua da Panificadora, 12', 'SHIPCITY' => 'Rio de Janeiro', 'SHIPREGION' => 'RJ', 'SHIPPOSTALCODE' => '02389-673', 'SHIPCOUNTRY' => 'Brazil'), array('ORDERID' => 10292, 'CUSTOMERID' => 'TRADH', 'EMPLOYEEID' => 1, 'ORDERDATE' => '1996-08-28 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-25 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-02 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 1.35, 'SHIPNAME' => 'Tradi√Éao Hipermercados', 'SHIPADDRESS' => 'Av. In√™s de Castro, 414', 'SHIPCITY' => 'Sao Paulo', 'SHIPREGION' => 'SP', 'SHIPPOSTALCODE' => '05634-030', 'SHIPCOUNTRY' => 'Brazil'), array('ORDERID' => 10293, 'CUSTOMERID' => 'TORTU', 'EMPLOYEEID' => 1, 'ORDERDATE' => '1996-08-29 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-26 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-11 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 21.18, 'SHIPNAME' => 'Tortuga Restaurante', 'SHIPADDRESS' => 'Avda. Azteca 123', 'SHIPCITY' => 'M√©xico D.F.', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '05033', 'SHIPCOUNTRY' => 'Mexico'), array('ORDERID' => 10294, 'CUSTOMERID' => 'RATTC', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-08-30 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-27 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-05 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 147.26, 'SHIPNAME' => 'Rattlesnake Canyon Grocery', 'SHIPADDRESS' => '2817 Milton Dr.', 'SHIPCITY' => 'Albuquerque', 'SHIPREGION' => 'NM', 'SHIPPOSTALCODE' => '87110', 'SHIPCOUNTRY' => 'USA'), array('ORDERID' => 10295, 'CUSTOMERID' => 'VINET', 'EMPLOYEEID' => 2, 'ORDERDATE' => '1996-09-02 00:00:00.000000000', 'REQUIREDDATE' => '1996-09-30 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-10 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 1.15, 'SHIPNAME' => 'Vins et alcools Chevalier', 'SHIPADDRESS' => '59 rue de lAbbaye', 'SHIPCITY' => 'Reims', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '51100', 'SHIPCOUNTRY' => 'France'), array('ORDERID' => 10296, 'CUSTOMERID' => 'LILAS', 'EMPLOYEEID' => 6, 'ORDERDATE' => '1996-09-03 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-01 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-11 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 0.12, 'SHIPNAME' => 'LILA-Supermercado', 'SHIPADDRESS' => 'Carrera 52 con Ave. Bol√≠var #65-98 Llano Largo', 'SHIPCITY' => 'Barquisimeto', 'SHIPREGION' => 'Lara', 'SHIPPOSTALCODE' => '3508', 'SHIPCOUNTRY' => 'Venezuela'), array('ORDERID' => 10297, 'CUSTOMERID' => 'BLONP', 'EMPLOYEEID' => 5, 'ORDERDATE' => '1996-09-04 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-16 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-10 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 5.74, 'SHIPNAME' => 'Blondel p√®re et fils', 'SHIPADDRESS' => '24, place Kl√©ber', 'SHIPCITY' => 'Strasbourg', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '67000', 'SHIPCOUNTRY' => 'France'), array('ORDERID' => 10298, 'CUSTOMERID' => 'HUNGO', 'EMPLOYEEID' => 6, 'ORDERDATE' => '1996-09-05 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-03 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-11 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 168.22, 'SHIPNAME' => 'Hungry Owl All-Night Grocers', 'SHIPADDRESS' => '8 Johnstown Road', 'SHIPCITY' => 'Cork', 'SHIPREGION' => 'Co. Cork', 'SHIPPOSTALCODE' => NULL, 'SHIPCOUNTRY' => 'Ireland'), array('ORDERID' => 10299, 'CUSTOMERID' => 'RICAR', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-09-06 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-04 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-13 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 29.76, 'SHIPNAME' => 'Ricardo Adocicados', 'SHIPADDRESS' => 'Av. Copacabana, 267', 'SHIPCITY' => 'Rio de Janeiro', 'SHIPREGION' => 'RJ', 'SHIPPOSTALCODE' => '02389-890', 'SHIPCOUNTRY' => 'Brazil'), array('ORDERID' => 10300, 'CUSTOMERID' => 'MAGAA', 'EMPLOYEEID' => 2, 'ORDERDATE' => '1996-09-09 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-07 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-18 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 17.68, 'SHIPNAME' => 'Magazzini Alimentari Riuniti', 'SHIPADDRESS' => 'Via Ludovico il Moro 22', 'SHIPCITY' => 'Bergamo', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '24100', 'SHIPCOUNTRY' => 'Italy'), array('ORDERID' => 10301, 'CUSTOMERID' => 'WANDK', 'EMPLOYEEID' => 8, 'ORDERDATE' => '1996-09-09 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-07 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-17 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 45.08, 'SHIPNAME' => 'Die Wandernde Kuh', 'SHIPADDRESS' => 'Adenauerallee 900', 'SHIPCITY' => 'Stuttgart', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '70563', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10302, 'CUSTOMERID' => 'SUPRD', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-09-10 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-08 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-09 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 6.27, 'SHIPNAME' => 'Supr√™mes d√©lices', 'SHIPADDRESS' => 'Boulevard Tirou, 255', 'SHIPCITY' => 'Charleroi', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => 'B-6000', 'SHIPCOUNTRY' => 'Belgium'), array('ORDERID' => 10303, 'CUSTOMERID' => 'GODOS', 'EMPLOYEEID' => 7, 'ORDERDATE' => '1996-09-11 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-09 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-18 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 107.83, 'SHIPNAME' => 'Godos Cocina T√≠pica', 'SHIPADDRESS' => 'C/ Romero, 33', 'SHIPCITY' => 'Sevilla', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '41101', 'SHIPCOUNTRY' => 'Spain'), array('ORDERID' => 10304, 'CUSTOMERID' => 'TORTU', 'EMPLOYEEID' => 1, 'ORDERDATE' => '1996-09-12 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-10 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-17 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 63.79, 'SHIPNAME' => 'Tortuga Restaurante', 'SHIPADDRESS' => 'Avda. Azteca 123', 'SHIPCITY' => 'M√©xico D.F.', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '05033', 'SHIPCOUNTRY' => 'Mexico'), array('ORDERID' => 10305, 'CUSTOMERID' => 'OLDWO', 'EMPLOYEEID' => 8, 'ORDERDATE' => '1996-09-13 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-11 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-09 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 257.62, 'SHIPNAME' => 'Old World Delicatessen', 'SHIPADDRESS' => '2743 Bering St.', 'SHIPCITY' => 'Anchorage', 'SHIPREGION' => 'AK', 'SHIPPOSTALCODE' => '99508', 'SHIPCOUNTRY' => 'USA'), array('ORDERID' => 10306, 'CUSTOMERID' => 'ROMEY', 'EMPLOYEEID' => 1, 'ORDERDATE' => '1996-09-16 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-14 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-23 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 7.56, 'SHIPNAME' => 'Romero y tomillo', 'SHIPADDRESS' => 'Gran V√≠a, 1', 'SHIPCITY' => 'Madrid', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '28001', 'SHIPCOUNTRY' => 'Spain'), array('ORDERID' => 10307, 'CUSTOMERID' => 'LONEP', 'EMPLOYEEID' => 2, 'ORDERDATE' => '1996-09-17 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-15 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-25 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 0.56, 'SHIPNAME' => 'Lonesome Pine Restaurant', 'SHIPADDRESS' => '89 Chiaroscuro Rd.', 'SHIPCITY' => 'Portland', 'SHIPREGION' => 'OR', 'SHIPPOSTALCODE' => '97219', 'SHIPCOUNTRY' => 'USA'), array('ORDERID' => 10308, 'CUSTOMERID' => 'ANATR', 'EMPLOYEEID' => 7, 'ORDERDATE' => '1996-09-18 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-16 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-24 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 1.61, 'SHIPNAME' => 'Ana Trujillo Emparedados y helados', 'SHIPADDRESS' => 'Avda. de la Constituci√≥n 2222', 'SHIPCITY' => 'M√©xico D.F.', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '05021', 'SHIPCOUNTRY' => 'Mexico'), array('ORDERID' => 10309, 'CUSTOMERID' => 'HUNGO', 'EMPLOYEEID' => 3, 'ORDERDATE' => '1996-09-19 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-17 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-23 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 47.3, 'SHIPNAME' => 'Hungry Owl All-Night Grocers', 'SHIPADDRESS' => '8 Johnstown Road', 'SHIPCITY' => 'Cork', 'SHIPREGION' => 'Co. Cork', 'SHIPPOSTALCODE' => NULL, 'SHIPCOUNTRY' => 'Ireland'), array('ORDERID' => 10310, 'CUSTOMERID' => 'THEBI', 'EMPLOYEEID' => 8, 'ORDERDATE' => '1996-09-20 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-18 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-27 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 17.52, 'SHIPNAME' => 'The Big Cheese', 'SHIPADDRESS' => '89 Jefferson Way Suite 2', 'SHIPCITY' => 'Portland', 'SHIPREGION' => 'OR', 'SHIPPOSTALCODE' => '97201', 'SHIPCOUNTRY' => 'USA'), array('ORDERID' => 10311, 'CUSTOMERID' => 'DUMON', 'EMPLOYEEID' => 1, 'ORDERDATE' => '1996-09-20 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-04 00:00:00.000000000', 'SHIPPEDDATE' => '1996-09-26 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 24.69, 'SHIPNAME' => 'Du monde entier', 'SHIPADDRESS' => '67, rue des Cinquante Otages', 'SHIPCITY' => 'Nantes', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '44000', 'SHIPCOUNTRY' => 'France'), array('ORDERID' => 10312, 'CUSTOMERID' => 'WANDK', 'EMPLOYEEID' => 2, 'ORDERDATE' => '1996-09-23 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-21 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-03 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 40.26, 'SHIPNAME' => 'Die Wandernde Kuh', 'SHIPADDRESS' => 'Adenauerallee 900', 'SHIPCITY' => 'Stuttgart', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '70563', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10313, 'CUSTOMERID' => 'QUICK', 'EMPLOYEEID' => 2, 'ORDERDATE' => '1996-09-24 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-22 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-04 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 1.96, 'SHIPNAME' => 'QUICK-Stop', 'SHIPADDRESS' => 'Taucherstra√üe 10', 'SHIPCITY' => 'Cunewalde', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '01307', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10314, 'CUSTOMERID' => 'RATTC', 'EMPLOYEEID' => 1, 'ORDERDATE' => '1996-09-25 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-23 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-04 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 74.16, 'SHIPNAME' => 'Rattlesnake Canyon Grocery', 'SHIPADDRESS' => '2817 Milton Dr.', 'SHIPCITY' => 'Albuquerque', 'SHIPREGION' => 'NM', 'SHIPPOSTALCODE' => '87110', 'SHIPCOUNTRY' => 'USA'), array('ORDERID' => 10315, 'CUSTOMERID' => 'ISLAT', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-09-26 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-24 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-03 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 41.76, 'SHIPNAME' => 'Island Trading', 'SHIPADDRESS' => 'Garden House Crowther Way', 'SHIPCITY' => 'Cowes', 'SHIPREGION' => 'Isle of Wight', 'SHIPPOSTALCODE' => 'PO31 7PJ', 'SHIPCOUNTRY' => 'UK'), array('ORDERID' => 10316, 'CUSTOMERID' => 'RATTC', 'EMPLOYEEID' => 1, 'ORDERDATE' => '1996-09-27 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-25 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-08 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 150.15, 'SHIPNAME' => 'Rattlesnake Canyon Grocery', 'SHIPADDRESS' => '2817 Milton Dr.', 'SHIPCITY' => 'Albuquerque', 'SHIPREGION' => 'NM', 'SHIPPOSTALCODE' => '87110', 'SHIPCOUNTRY' => 'USA'), array('ORDERID' => 10317, 'CUSTOMERID' => 'LONEP', 'EMPLOYEEID' => 6, 'ORDERDATE' => '1996-09-30 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-28 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-10 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 12.69, 'SHIPNAME' => 'Lonesome Pine Restaurant', 'SHIPADDRESS' => '89 Chiaroscuro Rd.', 'SHIPCITY' => 'Portland', 'SHIPREGION' => 'OR', 'SHIPPOSTALCODE' => '97219', 'SHIPCOUNTRY' => 'USA'), array('ORDERID' => 10318, 'CUSTOMERID' => 'ISLAT', 'EMPLOYEEID' => 8, 'ORDERDATE' => '1996-10-01 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-29 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-04 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 4.73, 'SHIPNAME' => 'Island Trading', 'SHIPADDRESS' => 'Garden House Crowther Way', 'SHIPCITY' => 'Cowes', 'SHIPREGION' => 'Isle of Wight', 'SHIPPOSTALCODE' => 'PO31 7PJ', 'SHIPCOUNTRY' => 'UK'), array('ORDERID' => 10319, 'CUSTOMERID' => 'TORTU', 'EMPLOYEEID' => 7, 'ORDERDATE' => '1996-10-02 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-30 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-11 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 64.5, 'SHIPNAME' => 'Tortuga Restaurante', 'SHIPADDRESS' => 'Avda. Azteca 123', 'SHIPCITY' => 'M√©xico D.F.', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '05033', 'SHIPCOUNTRY' => 'Mexico'), array('ORDERID' => 10320, 'CUSTOMERID' => 'WARTH', 'EMPLOYEEID' => 5, 'ORDERDATE' => '1996-10-03 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-17 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-18 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 34.57, 'SHIPNAME' => 'Wartian Herkku', 'SHIPADDRESS' => 'Torikatu 38', 'SHIPCITY' => 'Oulu', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '90110', 'SHIPCOUNTRY' => 'Finland'), array('ORDERID' => 10321, 'CUSTOMERID' => 'ISLAT', 'EMPLOYEEID' => 3, 'ORDERDATE' => '1996-10-03 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-31 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-11 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 3.43, 'SHIPNAME' => 'Island Trading', 'SHIPADDRESS' => 'Garden House Crowther Way', 'SHIPCITY' => 'Cowes', 'SHIPREGION' => 'Isle of Wight', 'SHIPPOSTALCODE' => 'PO31 7PJ', 'SHIPCOUNTRY' => 'UK'), array('ORDERID' => 10322, 'CUSTOMERID' => 'PERIC', 'EMPLOYEEID' => 7, 'ORDERDATE' => '1996-10-04 00:00:00.000000000', 'REQUIREDDATE' => '1996-11-01 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-23 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 0.4, 'SHIPNAME' => 'Pericles Comidas cl√°sicas', 'SHIPADDRESS' => 'Calle Dr. Jorge Cash 321', 'SHIPCITY' => 'M√©xico D.F.', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '05033', 'SHIPCOUNTRY' => 'Mexico'), array('ORDERID' => 10323, 'CUSTOMERID' => 'KOENE', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-10-07 00:00:00.000000000', 'REQUIREDDATE' => '1996-11-04 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-14 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 4.88, 'SHIPNAME' => 'K√∂niglich Essen', 'SHIPADDRESS' => 'Maubelstr. 90', 'SHIPCITY' => 'Brandenburg', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '14776', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10324, 'CUSTOMERID' => 'SAVEA', 'EMPLOYEEID' => 9, 'ORDERDATE' => '1996-10-08 00:00:00.000000000', 'REQUIREDDATE' => '1996-11-05 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-10 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 214.27, 'SHIPNAME' => 'Save-a-lot Markets', 'SHIPADDRESS' => '187 Suffolk Ln.', 'SHIPCITY' => 'Boise', 'SHIPREGION' => 'ID', 'SHIPPOSTALCODE' => '83720', 'SHIPCOUNTRY' => 'USA'), array('ORDERID' => 10325, 'CUSTOMERID' => 'KOENE', 'EMPLOYEEID' => 1, 'ORDERDATE' => '1996-10-09 00:00:00.000000000', 'REQUIREDDATE' => '1996-10-23 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-14 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 64.86, 'SHIPNAME' => 'K√∂niglich Essen', 'SHIPADDRESS' => 'Maubelstr. 90', 'SHIPCITY' => 'Brandenburg', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '14776', 'SHIPCOUNTRY' => 'Germany'), array('ORDERID' => 10326, 'CUSTOMERID' => 'BOLID', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-10-10 00:00:00.000000000', 'REQUIREDDATE' => '1996-11-07 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-14 00:00:00.000000000', 'SHIPVIA' => 2, 'FREIGHT' => 77.92, 'SHIPNAME' => 'B√≥lido Comidas preparadas', 'SHIPADDRESS' => 'C/ Araquil, 67', 'SHIPCITY' => 'Madrid', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '28023', 'SHIPCOUNTRY' => 'Spain'), array('ORDERID' => 10327, 'CUSTOMERID' => 'FOLKO', 'EMPLOYEEID' => 2, 'ORDERDATE' => '1996-10-11 00:00:00.000000000', 'REQUIREDDATE' => '1996-11-08 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-14 00:00:00.000000000', 'SHIPVIA' => 1, 'FREIGHT' => 63.36, 'SHIPNAME' => 'Folk och f√§ HB', 'SHIPADDRESS' => '√Ökergatan 24', 'SHIPCITY' => 'Br√§cke', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => 'S-844 67', 'SHIPCOUNTRY' => 'Sweden'), array('ORDERID' => 10328, 'CUSTOMERID' => 'FURIB', 'EMPLOYEEID' => 4, 'ORDERDATE' => '1996-10-14 00:00:00.000000000', 'REQUIREDDATE' => '1996-11-11 00:00:00.000000000', 'SHIPPEDDATE' => '1996-10-17 00:00:00.000000000', 'SHIPVIA' => 3, 'FREIGHT' => 87.03, 'SHIPNAME' => 'Furia Bacalhau e Frutos do Mar', 'SHIPADDRESS' => 'Jardim das rosas n. 32', 'SHIPCITY' => 'Lisboa', 'SHIPREGION' => NULL, 'SHIPPOSTALCODE' => '1675', 'SHIPCOUNTRY' => 'Portugal'));

$chartdata = array(array('anno' => 2000, 'enero' => 10, 'febrero' => 12, 'marzo' => 12, 'abril' => 1), array('anno' => 2001, 'enero' => 1, 'febrero' => 6, 'marzo' => 1, 'abril' => 3), array('anno' => 2002, 'enero' => 12, 'febrero' => 4, 'marzo' => 6, 'abril' => 6), array('anno' => 2003, 'enero' => 4, 'febrero' => 2, 'marzo' => 5, 'abril' => 9));

/**
 * Objeto que maneja la configuracion del reporte.
 */
$report = new ReportExpress();

/**
 * Ubicamos la direccion de los ejemplos.Esta direccion cambia en dependencia
 * de la ubicacion del reporte que se desee mostrar.
 */
$report->setConfig('jrxml/');

/**
 * Nombre del reporte
 */
$name = $_GET['name'];

switch ($name) {
   case "report1":
   case "report2":
   case "report3":
   case "report4":
   case "report5":
   case "report6":
   case "report12":
      $report->setConfig(realpath(__DIR__ . '/jrxml/chart/'));
      $report->addDataset('New Dataset 1', array(array('anno' => 2000, 'enero' => 10, 'febrero' => 12, 'marzo' => 12, 'abril' => 1), array('anno' => 2001, 'enero' => 1, 'febrero' => 6, 'marzo' => 1, 'abril' => 3), array('anno' => 2002, 'enero' => 12, 'febrero' => 4, 'marzo' => 6, 'abril' => 6), array('anno' => 2003, 'enero' => 4, 'febrero' => 2, 'marzo' => 5, 'abril' => 9)));
      $report->load($name, $chartdata);
      break;
   case "parameters_variables":
      $params = array('Country' => 'Germany', 'BetterStuf' => 'xxx12');
      $report->load($name, $bulkdata, $params);
      break;
   default:
      $report->load($name, $bulkdata);
      break;
}

$report->show();
?>
<?php

use Illuminate\Database\Seeder;
use App\ModelsFuelStation\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 
        Array de arrays de 8 posiciones 
        vehicle     plates      serie   brand     color    model    inventory     observations
        */
        $vehicles = [

            // SEGURIDAD PÚBLICA

            ['NR-508','S/P','3N6AD33C2GK807037','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002733','RECORRIDO EN COMUNIDADES',1],
            ['NR-209','S/P','3N6AD33CXGK806556','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002745','RECORRIDO EN COMUNIDADES',1],
            ['NR-804','S/P','3N6AD33C5GK807744','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002744','No funciona el odometro.',1],
            ['NR-915','S/P','3N6AD33C2GK806602','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002743','No funciona odometro.',1],
            ['NR-805','S/P','3N6AD33C6GK806604','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002742','RECORRIDO EN COMUNIDADES',1],
            ['NR-607','S/P','3N6AD33C3GK806561','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002741','No funciona el odometro.',1],
            ['NR-608','S/P','3N6AD33C7GK806563','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002740','No funciona odometro.',1],
            ['NR-707','S/P','3N6AD33C8GK806510','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002739','RECORRIDO EN COMUNIDADES',1],
            ['NR-208','S/P','3N6AD33C8GK806541','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002738','RECORRIDO EN COMUNIDADES',1],
            ['NR-409','S/P','3N6AD33C9GK806564','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002737','RECORRIDO EN COMUNIDADES',1],
            ['MNR-014','S/P','5Y4AH10Y47A024824','YAMAHA','BCO/NGO','GRIZZLY','NIC-098-Q00-001966','ATENDER EMERGENCIAS',1],
            ['NR-106','S/P','3N6AD33C1GK806509','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002735','No funciona odometro.',1],
            ['NR-916','S/P','3N6AD33CXGK806587','NISSAN PICK UP','AZUL/BCO','2016','NIC-098-Q00-002746','RECORRIDO EN COMUNIDADES',1],
            ['NR-507','S/P','3N6AD33C0GK806565','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002732','No funciona el odometro.',1],
            ['NR-308','S/P','3N6AD33CXGK806606','NISSAN PICK-UP','BCO/AZUL','2016','NIC-098-Q00-002731','RECORRIDO EN COMUNIDADES',1],
            ['NR-709','S/P','3N6AD33C7GK807616','NISSAN PICK-UP','BCO/AZUL','2016','NIC-098-Q00-002730','No funciona odometro.',1],
            ['NR-914','S/P','3N6AD33C7GK806482','NISSAN FRONTIER','BCO/AZUL','2016','NIC-098-Q00-002729','RECORRIDO EN COMUNIDADES',1],
            ['21-370','S/P','MMBMG46H7FD062959','MITSUBUSHI','BCO/AZUL','2015','NIC-098-Q00-004346','RECORRIDO EN COMUNIDADES',1],
            ['21-377','S/P','MMBMG48H4FD062689','MITSIBISHI','BCO/AZUL','2015','NIC-098-Q00-004344','RECORRIDO EN COMUNIDADES',1],
            ['21-383','S/P','MMBMG46HXFD062907','MITSUBISHI','BCO/AZUL','2015','NIC-098-Q00-004345','RECORRIDO EN COMUNIDADES',1],
            ['23-554','S/P','MR0EX32G2F0263887','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001964','ATENDER EMERGENCIAS',1],
            ['23-552','S/P','MR0EX32G4F0263860','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001961','ATENDER EMERGENCIAS',1],
            ['NR-913','S/P','3N6AD33C8GK806572','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002736','No funciona el odometro.',1],
            ['NR-03','S/P','3C6SRADT0KG508872','RAM 2500 CREW','AZUL/BCO','2019','NIC-098-Q00-004854','No funciona odometro.',1],
            ['NR-00034','S/P','8AFER5AD1A6319361','FORD RANGER','BCO/AZUL','2010','NIC-098--Q00-001902','Atender emergencias',1],
            ['23-573','S/P','1D7HE38K29S809647','DODGE DAKOTA','BCO/AZUL','2009','NIC-098-Q00-001888','ATENDER EMERGENCIAS',1],
            ['MNR-037','S/P','ME1KG0443B2017790','YAMAHA','BCO/NGO','FZ16CB','NIC-098-Q00-001977','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-909','S/P','MR0EX32G6F0263407','TOYOTA','BCO/AZUL','2015','NIC-098-Q00-001960','No funciona el odometro.',1],
            ['NR-05','S/P','JM1BN1V30J1175606','MAZDA','BCO/AZUL','2018','NIC-098-Q00-004858','No funciona odometro.',1],
            ['MNR-006','S/P','ME1RG4251J2014211','YAMAHA','BCO/AZUL','2018 FZ25','NIC-098-Q00-004852','No funciona odometro.',1],
            ['MNR-003','S/P','MD2A67KYXKCA00181','BAJAJ','BCO/AZUL','2019 DOMINAR 250 CC','NIC-098-Q00-004857','No funciona el odometro.',1],
            ['MNR-007','S/P','ME1RG425XJ2014174','YAMAHA','BLANCO','2018 FZ25','NIC-098-Q00-004851','No funciona odometro.',1],
            ['MNR-005','S/P','ME1RG4256J2010784','YAMAHA','BLANCO','2018 FZ25','NIC-098-Q00-004850','No funciona el odometro.',1],
            ['NR-307','S/P','3N6AD33C2GK806499','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002747','RECORRIDO EN COMUNIDADES',1],
            ['NR-04','S/P','3C6SRADT5KG510116','RAM 2500 CREW','AZUL/BCO','2019','NIC-098-Q00-004853','No funciona odometro.',1],
            ['NR-407','S/P','3N6AD33C1GK806493','NISSAN PICK UP','BCO/AZUL','2016','NIC-098-Q00-002748','No funciona el odometro.',1],
            ['NR-0001','S/P','3C6SRADT1JG172115','RAM 2500 CREW','NEGRO/GRIS','2018','NIC-098-Q00-004729','No funciona odometro.',1],
            ['NR-0002','S/P','3C6SRADTXJG172114','RAM 2500 CREW','NEGRO/GRIS','2018','NIC-098-Q00-004730','No funciona el odometro.',1],
            ['MNR-047','S/P','9C6KG0313G0012235','YAMAHA','BLANCO','XTZ250 LANDER 2006','NIC-098-Q00-003735','No funciona el odometro.',1],
            ['NR-J-07','S/P','MMBML45G7GH026560','MITSUBISHI L200','NGO/BCO','2017','NIC-098-Q00-004349','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-J-08','S/P','MMBML45G8HH004312','MITSUBISHI L200','NGO/BCO','2017','NIC-098-Q00-003912','No funciona odometro.',1],
            ['NR-J-06','S/P','MMBML45G4HH004372','MITSUBISHI L200','NGO/BCO','2017','NIC-098-Q00-003914','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-J-05','S/P','MMBML45G7GH026588','MITSUBISHI','NGO/BCO','2017','NIC-098-Q00-004348','No funciona odometro.',1],
            ['NR-J-04','S/P','MMBML45G7GH021827','MITSUBISHI L200','NGO/BCO','2017','NIC-098-Q00-004347','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-J-02','S/P','MMBML45G0HH004563','MITSUBISHI L200','NEGRO/BLANCO','2017','NIC-098-Q00-003913','No funciona odometro.',1],
            ['23-551','S/P','MR0EX32G0F0263175','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001958','No funciona odometro.',1],
            ['MNR-004','S/P','ME1RG4259J2017003','YAMAHA','BCO/AZUL','2018 FZ25','NIC-098-Q00-004849','No funciona odometro.',1],
            ['MNR-011','S/P','9C6KE073070006099','YAMAHA','BCO/NGO','XTZ125EB7','NIC-098-Q00-001969','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-550','S/P','MR0EX32GXF0263605','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001959','ATENDER EMERGENCIAS',1],
            ['23-543','S/P','3N6DD23T6EK012593','NISSAN NP300','AZUL/BCO','2014','NIC-098-Q00-001913','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-544','S/P','3N6DD23T1EK010881','NISSAN NP300','AZUL/BCO','2014','NIC-098-Q00-001921','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-545','S/P','3N6DD23T2EK011912','NISSAN NP300','AZUL/BCO','2014','NIC-098-Q00-001915','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-585','S/P','3N6DD23T93K012538','NISSAN NP300','AZUL/BCO','2014','NIC-098-Q00-001924','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-911','S/P','3N6DD23T6EK011072','NISSAN NP300','AZUL/BCO','2014','NIC-098-Q00-001922','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-584','S/P','3N6DD23T7EK017673','NISSAN NP300','AZUL/BCO','2014','NIC-098-Q00-001912','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-583','S/P','3N6DD23TXEK013343','NISSAN NP300','AZUL/BCO','2014','NIC-098-Q00-001917','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-582','S/P','3N6DD23T93K014094','NISSAN NP300','AZUL/BCO','2014','NIC-098-Q00-001918','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-541','S/P','3N6DD23T4EK017257','NISSAN NP300','AZUL/BCO','2014','NIC-098-Q00-001911','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-575','S/P','8AFER5AD7A9319364','FORD','BCO/NGO','2010','NIC-098-Q00-001892','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-954','S/P','3N6DD23T4EK003097','NISSAN NP300','AZUL/BCO','2014','NIC-098-Q00-001916','No funciona odometro.',1],
            ['MNR-002','S/P','MD2A67KY8KCB00120','BAJAJ','NEGRO','2018 DOMINAR 400CC','NIC-098-Q00-004860','No funciona odometro.',1],
            ['MNR-015','S/P','5Y4AH10Y07A024822','YAMAHA','BCO/NGO','GRIZZLY','NIC-098-Q00-001965','Vigilar, hacer recorridos y atender emergencias.',1],
            ['','S/P','JYAVP11E77A097456','YAMAHA','BCO/NGO','XVS1100','NIC-098-Q00-001971','No funciona el odometro.',1],
            ['MNR-040','S/P','ME1KG044XE2061015','YAMAHA','BCO/NGO','2014','NIC-098-Q00-001980','Vigilar, hacer recorridos y atender emergencias.',1],
            ['MNR-025','S/P','JYA4KM0018A127084','XJ900','BCO/NGO','POLICE','NIC-098-Q00-001974','Vigilar, hacer recorridos y atender emergencias.',1],
            ['MNR-022','S/P','9C6KE073370006095','YAMAHA','BCO/NGO','XTZ125EB7','NIC-098-Q00-001970','Vigilar, hacer recorridos y atender emergencias.',1],
            ['MNR-033','S/P','ME1KG044XB2017785','YAMAHA','BCO/NGO','FZ16CB','NIC-098-Q00-001979','Vigilar, hacer recorridos y atender emergencias.',1],
            ['MNR-034','S/P','ME1KG0445B2017788','YAMAHA','BCO/NGO','FZ16CB','NIC-098-Q00-001975','Vigilar, hacer recorridos y atender emergencias.',1],
            ['MNR-035','S/P','ME1KG0444B2017927','YAMAHA','BCO/NGO','FZ16CB','NIC-098-Q00-001978','Vigilar, hacer recorridos y atender emergencias.',1],
            ['MNR-031','S/P','ME1KG0442B2017814','YAMAHA','BCO/NGO','FZ16CB','NIC-098-Q00-001976','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-580','S/P','3N6DD23T9EK011695','NISSAN NP300','AZUL/BCO','2014','NIC-098-Q00-001923','No funciona odometro.',1],
            ['MNR-041','S/P','ME1KG044XE2066585','YAMAHA','BCO/NGO','2014','NIC-098-Q00-001983','Vigilar, hacer recorridos y atender emergencias.',1],
            ['MNR-038','S/P','ME1KG0449B2017809','YAMAHA','BCO/NGO','FZ16CB','NIC-098-Q00-004254','ATENDER EMERGENCIAS',1],
            ['23-549','S/P','MR0EX32GAF0263292','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001957','No funciona odometro.',1],
            ['23-553','S/P','MR0EX32G9F0263496','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001956','No funciona odometro.',1],
            ['23-570','S/P','MR0EX32G8F0263201','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001955','ATENDER EMERGENCIAS',1],
            ['23-558','S/P','MR0EX32G5F0263317','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001954','No funciona el odometro.',1],
            ['23-548','S/P','MR0EX32G1F0263508','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001953','No funciona odometro.',1],
            ['23-557','S/P','MR0EX32G3F0263820','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001952','ATENDER EMERGENCIAS',1],
            ['23-556','S/P','MR0EX32G8F0263537','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001951','ATENDER EMERGENCIAS',1],
            ['23-559','S/P','MR0EX32G1F0263797','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001949','ATENDER EMERGENCIAS',1],
            ['23-542','S/P','3N6DD23T9EK017156','NISSAN NP300','AZUL/BCO','2014','NIC-098-Q00-001910','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-00063','S/P','3FEKF36L28MA04321','FORD GRUA','BCO/NGO','2008','NIC-098-Q00-001929','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-548','S/P','MR0EX32G1F0263508','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001953','No funciona odometro.',1],
            ['MNR-042','S/P','ME1KG044XE2066277','YAMAHA','BCO/NGO','2014','NIC-098-Q00-001981','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-00064','S/P','3AM68513850025704','MERCEDES BENZ','BCO/AZUL','1994','NIC-098-Q00-002858','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-560','S/P','3N6DD23T2CK010207','NISSAN','BLANCO/NGO','2012','NIC-098-Q00-001908','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-904','S/P','3N1EB31S3FK311461','NISSAN TSURU','PLATA/AZUL','2015','NIC-098-Q00-001940','No funciona el odómetro.',1],
            ['23-589','S/P','3N13B31C7FK311589','NISSAN TSURU','PLATA/AZUL','2015','NIC-098-Q00-001936','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-588','S/P','3N1EB31S7FK311463','NISSAN TSURU','PLATA/AZUL','2015','NIC-098-Q00-001935','No funciona odometro.',1],
            ['23-563','S/P','3N1BC1AD3FK196902','NISSAN TIIDA','PLATA/AZUL','2015','NIC-098-Q00-001941','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-565','S/P','3N1BC1AD4FK190557','NISSAN TIIDA','PLATA/AZUL','2015','NIC-098-Q00-002779','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-566','S/P','3N1BC1AB0FK193858','NISSAN TIIDA','PLATA/AZUL','2015','NIC-098-Q00-001940','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-304','S/P','3N1BC1ADXFK192247','NISSAN TIIDA','PLATA/AZUL','2015','NIC-098-Q00-001944','Vigilar, hacer recorridos y atender emergencias.',1],
            ['23-555','S/P','MR0EX32G3F0263526','TOYOTA','AZUL/BCO','2015','NIC-098-Q00-001962','ATENDER EMERGENCIAS',1],
            ['NR-4004','S/P','AFAFR6AAXKP104716','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-3001','S/P','AFAFR6AAKP105390','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-3002','S/P','AFAFR6AAKP105311','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-3004','S/P','AFAFR6AAKP104756','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['MNR-001','S/P','MD2A67K9KCB00112','BAJAJ','NEGRO MATE','2019 DOMINADOR 400CC','NIC-098-Q00-004859','No funciona el odometro.',1],
            ['NR-4001','S/P','3FA6P0C92KR156646','FORD','BLANCO/AZUL','SEDAN FUSION 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-5006','S/P','AFAFR6AA0KP104722','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-4003','S/P','AFAFR6AAXKP103520','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-2002','S/P','AFAFR6AA0KP105406','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-4005','S/P','AFAFR6AA9KP104772','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-5001','S/P','3FA6P0C92KR244306','FORD','BLANCO/AZUL','SEDAN FUSION 2019','CONTRATO MNR/SA/RP/01/2019','No funciona el odometro.',1],
            ['NR-5002','S/P','AFAFR6AA9KP105212','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-5003','S/P','AFAFR6AA9KP104755','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-5004','S/P','AFAFR6AA2KP104757','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-900','S/P','3FA6P0C95KR227709','FORD','BLANCO/AZUL','SEDAN FUSION','CONTRATO MNR/SA/RP/01/2019','ATENDER EMERGENCIAS',1],
            ['NR-4002','S/P','AFAFR6AAAKP104775','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-1002','S/P','AFAFR6AA9KP105209','FORD','BLANCO / AZUL','PICK UP RANGER','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-901','S/P','3FA6P0C95KR211106','FORD','BLANCO/AZUL','SEDAN FUSION','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-902','S/P','3FA6P0C92KB227716','FORD','BLANCO / AZUL','SEDAN FUSION','CONTRATO MNR/SA/RP/01/2019','No funciona el odometro.',1],
            ['NR-903','S/P','3FA6P0G74JR199215','FORD','BLANCO / AZUL','SEDAN FUSION','CONTRATO MNR/SA/RP/01/2019','No funciona el odometro.',1],
            ['NR-905','S/P','AFAFR6AA9KP105226','FORD','BLANCO / AZUL','PICK UP RANGER','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-906','S/P','3FA6P0C99KR227700','FORD','BLANCO / AZUL','SEDAN FUSION','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-908','S/P','AFAFR6AA0KP105499','FORD','BLANCO / AZUL','PICK UP RANGER','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-2004','S/P','AFAFR6AA4KP103951','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NA-1001','S/P','3FA6P0695KR227709','FORD','BLANCO / AZUL','SEDAN FUSION','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-2003','S/P','AFAFR6AA9KP104724','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-1003','S/P','AFAFR6AA1KP105219','FORD','BLANCO / AZUL','PICK UP RANGER','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-1004','S/P','AFAFR6AA1KP104720','FORD','BLANCO/AZUL','PICK UP RANGER','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-1005','S/P','AFAFR6AAOKP105230','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-1006','S/P','AFARF6AA3KP105240','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-2001','S/P','AFAFR6AA0KP105244','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-6001','S/P','3FA6P0G77JR164023','FORD','BLANCO/AZUL','SEDAN FUSION 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-907','S/P','AFARF6AA3KP104766','FORD','BLANCO / AZUL','PICK UP RANGER','CONTRATO MNR/SA/RP/01/2019','ATENDER EMERGENCIAS',1],
            ['TMNR-13','H67-BDK','AFAFR6AA0KP104773','FORD','BCO/AZUL','RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['TMNR-02','G39-BDK','3FA6P0G75JR164036','FORD','BCO/AZUL','FUSION 2018','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['TMNR-03','J37-BDK','3FA6P0G74JR164044','FORD','BCO/AZUL','FUSION 2018','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['TMNR-04','J84-BDK','3FA6P0G77JR199225','FORD','BCO/AZUL','FUSION 2018','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['TMNR-05','J62-BDK','3FA6P0G79JR216011','FORD','BCO/AZUL','FUSION 2018','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['TMNR-10','G85-BDK','AFAFR6AA2KP104743','FORD','BCO/AZUL','RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-5005','S/P','AFAFR6AA0KP105339','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['TMNR-12','G25-BDK','AFAFR6AA1KP104765','FORD','BCO/AZUL','RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-912','S/P','AFAFR6AA1KP103650','FORD','BCO/AZUL','PICK UP RANGER','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['TMNR-14','H71-BDK','AFAFR6AA1KP104782','FORD','BCO/AZUL','RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['TMNR-101','8H7PZ','ME1RG4254K2024555','MOTOCICLETA YAMAHA (FZ25)','BCO/AZUL','2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['TMNR-102','8H6PZ','ME1RG4257K2024551','MOTOCICLETA YAMAHA (FZ25)','BCO/AZUL','2019','CONTRATO MNR/SA/RP/01/2019','No funciona el odometro.',1],
            ['TMNR-103','8H5PZ','ME1RG4250K2024553','MOTOCICLETA YAMAHA (FZ25)','BCO/AZUL','2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['TMNR-104','8H8PZ','ME1RG4252K2024554','MOTOCICLETA YAMAHA (FZ25)','BCO/AZUL','2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['MNR-100','8H9PZ','ME1RG4255K2024550','MOTOCICLETA YAMAHA (FZ25)','BCO/AZUL','2019','CONTRATO MNR/SA/RP/01/2019','No funciona odometro.',1],
            ['TMNR-11','H21-BDK','AFAFR6AA2KP104760','FORD','BCO/AZUL','RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-8001','S/P','AFAFR6AA2KP103558','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-6002','S/P','AFAFR6AA0KP105423','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-6003','S/P','AFAR6AA0KP105440','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-6004','S/P','AFAFR6AA6KP105216','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-6005','S/P','AFAFR6AAXKC104778','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-7001','S/P','AFAFR6AA7KP105211','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-7002','S/P','AFAFR6AA8KP1105220','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['TMNR-01','J76-BDK','3FA6P0G72KR101137','FORD','BCO/AZUL','FUSION S 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-7004','S/P','AFAFR6AA2KP103155','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-F150','S/P','1FTEW1CB6KFA47251','FORD','BLANCO','F150 XL 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-8002','S/P','AFAFR6AAXKP105221','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-8003','S/P','AFAFR6AA3KP105223','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-8004','S/P','AFAFR6AA0KP105387','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-1001','S/P','3FA6P0695KR227709','FORD','BLANCO/AZUL','SEDAN FUSION','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-910','S/P','AFAFR6AA1KP103468','FORD','BLANCO/AZUL','PICK UP RANGER','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-3003','S/P','AFAFR6AAKP105504','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','No funciona el odometro.',1],
            ['NR-7003','S/P','AFAFR6AA6KP104731','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],
            ['NR-3005','S/P','AFAFR6AAKP104781','FORD','BLANCO/AZUL','PICK UP RANGER 2019','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',1],


            // PROTECCIÓN CIVIL

            ['PC-23','S/P','1GCEC1X84213656','CHEVROLET','BLANCO','2004','S/N','Atender emergencias.',2,],
            ['PC-16','S/P','3D7KS28T49G557778','DODGE RAM  (UNIDAD LIGERA)','BCO/ROJO','2005','MNR098Q000602','Atender emergencias.',2,],
            ['PC-15','S/P','3N1EB31S57K339182','NISSAN TSURU GST','BCO/ROJO','2007','NIC-098-105-002529','No funciona el odometro.',2,],
            ['PC-14','S/P','WF0RT47H59JA32385','FORD (AMBULANCIA)','BCO/ROJO','2009','NIC-098-105-002532','Atender emergencias.',2,],
            ['PC-21','S/P','1HTLFTVN4GHA37233','MERCEDES BENZ (CAMION  T/AUTOBOMBA)','ROJO','GAUMMAN','NIC-098-105-002519','Atender emergencias.',2,],
            ['PC-22','S/P','LCMRE11L55HA22572','FORD (AMBULANCIA)','BCO/ROJO','2005','NIC-098-105-002521','Atender emergencias.',2,],
            ['PC-18','S/P','1FETRE1427YMA16990','FORD ECOLINE (AMBULANCIA TIPO VAN EQUIPADA)','BCO/ROJO','2000','NIC-098-105-002524','Atender emergencias.',2,],
            ['PC-10','S/P','3FEKF36198MA06339','FORD F-351 (CARROC. EQUIP. C/MOTOBOMBA)','ROJO','2007','NIC-098-105-002531','Atender emergencias.',2,],
            ['PC-30','S/P','3C6TRVCG5GE114352','DODGE','BCO/ROJO','2016','','',2,],
            ['PC-24','S/P','3VWSIA1B31M92527','VW SEDAN','BCO/ROJO','1992','NIC-098-105-002851','No funciona el odometro.',2,],
            ['PC-07','S/P','3GCM7H1C4YM107727','CHEVROLET KODIAK (CAMION CISTERNA)','ROJO','2000','NIC-098-105-002525','Atender emergencias.',2,],
            ['PC-17','S/P','3D7KS28T09G559799','DODGE RAM (UNIDAD LIGERA)','BCO/ROJO','2005','NIC-098-105-002534','Atender emergencias',2,],
            ['PC-04','S/P','3FTEF17204MA15358','FORD PICK UP','BCO/ROJO','2004','NIC-098-105-002526','No funciona el odometro.',2,],
            ['PC-03','S/P','3FTEF17235MA15243','FORD PICK UP','BCO/ROJO','2005','NIC-098-105-002528','Atender emergencias.',2,],
            ['PC-02','S/P','1GCH35U831171837','CHEVROLET (AMBULANCIA EQUIPADA)','BCO/ROJO','2003','NIC-098-105-002527','No funciona el odometro.',2,],
            ['PC-12','S/P','3FTEF25NXTMA11335','FORD PICK UP (LIGERA CON CAMPER)','BLANCO','2001','NIC-098-105-002522','Atender emergencias',2,],
            ['PC-11','S/P','3FEK36158MA063460','FORD (CARRC. EQUIP. TRAS. DE CAMION DE BOMBERO','ROJO','2008','NIC-098-105-002530','Atender emergencias.',2,],
            ['PC-M01','S/N','9C6KG0310G0012192','YAMAHA MOTOCICLETA','BLANCO','XTZ250 2016','NIC-098-105-003736','Atender emergencias.',2,],
            ['PC-20','S/P','AA1850JHA17529','INTERNATIONAL (CAMION CISTERNA)','ROJO','1983','NIC-098-105-002520','Atender emergencias.',2,],
            ['PC-17','S/P','3D7KS28T49G557778','PICK UP','BCO/ROJO','2009','NIC-098-105-002533','',2,],
            ['PC-27','S/P','1S9A1BLD352003103','STUPHEN','ROJO','2005','NIC-098-105-005453','No funciona el odometro.',2,],
            ['PC-05','S/P','1GCEC14X742133902','CHEVROLET PICK UP (UNIDAD LIGERA)','BCO/ROJO','2004','NIC-098-105-002523','No funciona el odometro.',2,],
            ['PC-01','S/P','1ETRE142XXH103769','FORD ECONOLINE (AMBULANCIA)','BCO/ROJO','2003','S/N','No funciona el odometro.',2,],
            ['PC-25','S/P','IFTRE14W45HA50485','FORD ECONOLINE E-150','BLANCO','2015','NIC-098-105-004999','No funciona el odometro.',2,],
            ['PC-13','S/P','3D7KS28TT09G559799','DODGE RAM 2500','BCO/ROJO','2009','MNR098Q000601','Atender emergencias.',2,],
            ['PC-19','S/P','1GCMC35R3Y1261331','CHEVROLET (AMBULANCIA)','BCO/ROJO','2006','S/N','Atender emergencias.',2,],



            // OBRAS PÚBLICAS

            ['OP-TSURU BLANCO','S/P','3N1EB31S07K340174','NISSAN TSURU','BCO/NGO','2007','NIC-098-124-000491','No funciona odometro.',3],
            ['OP-704','S/P','3N1EB31SXFK311523','NISSAN','BLANCO','2015','NIC-098-F00-001629','Trabajos en diversos puntos del Municipio.',3],
            ['OP-RETRO C','S/P','5HK05309','CATERPILLAR','AMARILLO TRAFICO','426 B','S/N','DIF. ACT. EN COMUNIDAD',3],
            ['OP-02','S/P','3N1EB31SX2K-360196','NISSAN SEDAN 4 PTAS','BLANCO','2002','NIC-098-F00-001627','DIF. ACT. EN COM.',3],
            ['OP-TSURU GRIS','S/P','3N1EB31S3AK332948','NISSAN TSURU GS1','GRIS','2010','NIC-098-F00-003080','No funciona odometro.',3],
            ['OP-FIGO ROJO','NJD3717','MAJFP1M17KA184483','FORD FIGO 4PT','ROJO RUBI','2019 IMPULSE TM AC','NIC-098-124-004977','Dif. Act. En comunidad',3],
            ['OP-39','S/P','1HTMMAAN23H601246','INTERNACIONAL','BLANCO','2010','S/N','TRABAJOS EN DIF. COMUNIDADES',3],
            ['OP-TORNADO','','93CCL80C1JB222653','CHEVROLET TORNADO','BLANCO','2018','NIC-098-124-004753','No funciona odometro.',3],
            ['OP-F150','H36-BDK','1FTEW1CB6KFA47198','FORD','BLANCO','2019','CONTRATO MNR/SA/RP/01/2019','DIF. ACT. EN COM.',3],
            ['OP-FIGO BCO.','H54-BDK','MAJFP1M18KA184461','FORD','BLANCO','FIGO 2019','CONTRATO MNR/SA/RP/01/2019','DIF. ACT. EN COM.',3],
            ['OP-FIGO GRIS','NJD3721','MAJFP1M17KA184936','FORD FIGO 4PT','GRIS MERCURIO','2019 IMPULSE TM AC','NIC-098-124-004978','Dif. Act. En comunidad',3],
            ['OP-M7 (MINICARGADOR 262B)','S/P','JAF0293813','CAT','AMARILLO TRAFICO','262B','9809350','Trabajos en diversos puntos del Municipio.',3],
            ['OP-M12','S/P','1660032','INGERSOLL RAND','','SD-100D-D','NIC-098-F00-001631','No funciona odometro.',3],
            ['OP-24','S/P','3GJC54K6XM104262','CHEVROLET','BLANCO','1999','9809383','Trabajos en diversos puntos del Municipio.',3],
            ['OP-25','S/P','2XKBAA8X62M931634','KENWORD TORTON DE 14M3','ROJO','2002','S/N','Trabajos en diversos puntos del Municipio.',3],
            ['OP-M1 (MOTOC. 530A)','S/P','203850','KOMATSU','AMARILLO TRAFICO','GD530A-2BY','9809288','Trabajos en diversos puntos del Municipio.',3],
            ['OP-M2','S/P','CATO116EASHA05497','CATERPILLAR','AMARILLO TRAFICO','2009','NIC-098-F00-001634','No funciona odometro.',3],
            ['OP-M3 (RETRO 550B)','S/P','KMYGD008A26051009','KOMATZU','AMARILLO TRAFICO','GD555-3C','MNR098F000024','Trabajos en diversos puntos del Municipio.',3],
            ['OP-M4 (RETRO 420D)','S/P','CAT0420DVFDP08855','CATERPILLAR','AMARILLO TRAFICO','2002','MNR098F000035','Trabajos en diversos puntos del Municipio.',3],
            ['OP-22','445AE6','1XKTDB9X04J888086','KENWORD TRACTO CAMION GONDOLA','BLANCO','2000','S/N','Trabajos en diversos puntos del Municipio.',3],
            ['OP-M6 (EXCAVADORA 320C L)','S/P','31052134','CATERPILLAR','AMARILLO TRAFICO','CAT320CL','NIC-098-F00-001633','No funciona odometro.',3],
            ['OP-21','S/P','3ALACWCLX6DW27671','FRAILINE DE 6M3','BLANCO','2006','S/N','Trabajos en diversos puntos del Municipio.',3],
            ['OP-M8 (RETRO CAT)','S/P','CAT0416EKSHA00634','CATERPILLAR','AMARILLO TRAFICO','580M','MNR098F000036','Trabajos en diversos puntos del Municipio.',3],
            ['OP-M9 (RETROEXCAVADORA  416B)','S/P','8SG08463','CATERPILLAR',' AMARILLO TRAFICO','416-B','NIC-098-F00-000936','Trabajos en diversos puntos del Municipio.',3],
            ['OP-M10 (MOTOC. 140G)','S/P','A7208732113','CATERPILLAR','AMARILLO TRAFICO','1992','NIC-098-F00-001635','No funciona odometro.',3],
            ['OP-M11 (EXCAVADORA  E120B)','S/P','60501015','CATERPILLAR','ROJO/NGO/AMARILLO','1985 (TIPO ORUGA)','NIC-098-F00-001636','Trabajos en diversos puntos del Municipio.',3],
            ['OP-30','S/P','3FTDF17222MA31229','FORD','ROJO','2003','S/N','DIFERENTES ACTIVIDADES EN COM.',3],
            ['OP-04','S/P','3FABP04B27M108102','FORD','BLANCO','2007','MNR098F000029','Trabajos en diversos puntos del Municipio.',3],
            ['OP-03','S/P','3VWS1A1B8XM517983','VW','BLANCO','1999','NIC-098-F00-000914','Trabajos en diversos puntos del Municipio.',3],
            ['OP-M5 (RETRO LB110)','S/P','31030089','NEW HOLLAND','AMARILLO TRAFICO','LB110','NIC-098-F00-001632','No funciona odometro.',3],
            ['OP-09','S/P','C1317UMEDO4355','FAMSA','BLANCO','1989','NIC-098-F00-001625','Trabajos en diversos puntos del Municipio.',3],
            ['OP-01','S/P','9BFBT18N857535703','FORD','BLANCO','2003','S/N','Trabajos en diversos puntos del Municipio.',3],
            ['OP-37','S/P','3ALACYCS480256872','FREIGTLINER','BLANCO','2008','S/N','TRABAJOS EN DIF. COMUNIDADES',3],
            ['OP-38','KZ-24-103','1HTSDAANXWH532639','NAVISTAR INTERNACIONAL','BLANCO','4900 4X2','S/N','TRABAJOS EN DIF. COMUNIDADES',3],
            ['OP-07','3141BZ','3ALBUC572DK19555','MERCEDES BENZ','BLANCO','FL70','S/N','TRABAJOS EN DIF. COMUNIDADES',3],
            ['OP-RODILLO COMPACTADOR','S/P','1660032','INGERSOLL-RAND','BLANCO','SD100D 2001','NIC-098-F00-001631','No funciona odometro.',3],
            ['OP-27','S/N','GA16760479S','NISSAN TSURU','DORADO','2001','NIC-098-F00-000925','DIFERENTES ACTIVIDADES EN COM.',3],
            ['OP-23','KF41227','MBM3AN68813850','MERCEDES BENZ PLATAFORMA','ROJO','1997','S/N','Trabajos en diversos puntos del Municipio.',3],
            ['OP-16-1','S/P','3N1EB31S87K339757','NISSAN SEDAN 4 PTAS','BLANCO','2007','NIC-098-F00-001628','DIF. ACT. EN COM.',3],
            ['OP-26','S/P','3NI6B51576L631878','NISSAN SENTRA','BLANCO','2006','NIC-098-F00-000857','TRABAJOS EN DIF. COMUNIDADES',3],
            ['OP-10','S/P','469GM2U1026541','DINA VOLTEO','BLANCO','1997','NIC-098-F00-001621','No funciona odometro.',3],
            ['OP-11','S/P','C1317UMEDO4262','FAMSA','BLANCO','1989','NIC-098-F00-000921','No funciona odometro.',3],
            ['OP-13','S/P','C1317UVMEDO6399','FAMSA','BLANCO','1989','NIC-098-F00-001626','Trabajos en diversos puntos del Municipio.',3],
            ['OP-16','S/P','3GBM7H1C71M105254','CHEVROLET VOLTEO','BLANCO','2001','NIC-098-F00-001623','No funciona odometro.',3],
            ['OP-17','S/P','3GBM7H1C51M105091','CHEVROLET VOLTEO','BLANCO','2001','NIC-098-F00-001622','No funciona odometro.',3],
            ['OP-18','S/P','3AM68522350041036','MERCEDES BENZ (VOLTEO)','BLANCO','1997','NIC-098-F00-004528','No funciona odometro.',3],
            ['OP-19','S/P','3AKBCYC547DY02332','MERCEDES BENZ','ROJO','2007','NIC-098-F00-002774','Trabajos en diversos puntos del Municipio.',3],
            ['OP-20','S/P','3FTEF17284MA15348','FORD CAMIONETA','BLANCO','2004','NIC-098-F00-004731','No funciona odometro.',3],


            // SERVICIOS PÚBLICOS
            // BACHEO Y BALIZAMIENTO


            ['SP-PINTARRAYAS','S/P','64173-02-17','SEMEX','BLANCO','1077','NIC-098-125-001502','No funciona odometro.',4],
            ['SP-21','S/P','3GCM7H1C3XM503162','CHEVROLET KODIAK VOLTEO','BLANCO','1999','NIC-098-H00-01488','No funciona odometro.',4],
            ['SP-RODILLO','S/P','5077962','WAKER','BLANCO','RV11A','NIC-098-H00-001494','No funciona odometro.',4],


            // SERVICIOS PÚBLICOS
            // ALUMBRADO PÚBLICO



            ['SP-09','S/P','8AFER5AD6A6319355','FORD RANGER','BLANCO','2010','NIC-098-H00-001896','No funciona el odometro.',5],
            ['SP-19','S/P','3FTEF15Y6SMA11724','FORD','BLANCO','1995','NIC-098-H00-001493','No funciona odometro.',5],
            ['SP-69','S/P','IGDK7HIC7XJ503360','GMC 6500','BLANCO','1999','NIC-098-H00-001482','No funciona el odometro.',5],
            ['SP-62','S/P','3FEMF46SX9MA19656','FORD TIPO CANASTILLA','BLANCO','2009','NIC-098-H00-001480','No funciona odometro.',5],


            // SERVICIOS PÚBLICOS
            // PANTEONES, PARQUES Y JARDINES

            ['SP-CAMIONETA VAN', 'S/P','JGCHG35K991150920','CHEVROLET','BLANCO','2009','NIC-098-145-004920','No funciona odometro.',6],
            ['SP-23', 'S/P','3N1EB31SX1K338598','NISSAN','BLANCO','2001','NIC-098-H00-001519','No funciona odometro.',6],
            ['SP-FORD 350', 'JO6BDK','1FDWF3G66KEF26463','FORD','BLANCO','2019','CONTRATO MNR/SA/RP/01/2019','servicios a diferentes comunidades',6],
            ['SP-MOSKO 2', 'S/N','1511001337','TRUPER','NARANJA','DES-63','S/N','TRABAJO EN COMUNIDAD',6],
            ['SP-MOSKO 1', 'S/P','1502000315','TRUPER','NARANJA','DES-33','S/N','servicios a diferentes comunidades',6],
            ['SP/RANGER 2', 'S/P','8AFER5AD4A6319354','FORD RANGER','BLANCO','2010','NIC-098-H00-001898','DIF. ACT. EN COM.',6],
            ['SP-121', 'J06-BDK','1FDWF3G66KEF26463','FORD','BLANCO','2019','CONTRATO MNR/SA/RP/01/2019','DIF. ACT. EN COM.',6],
            ['SP/TSURU VELATORIO', 'S/P','3N1EB31S97K339802','NISSAN SEDAN','BLANCO','2007','NIC-098-145-002481','DIF. ACT. EN COM.',6],
            ['DESMALEZADORA 3', 'S/N','','','','TIPO BICI 63CC','NIC-098-H00-003671','Dif. Actividades en comunidad',6],
            ['SP-MOSKO 4', 'S/P','1510001472','TRUPER','NARANJA','DES-33','S/N','TRABAJO EN COMUNIDAD',6],
            ['SP-MOSKO 5', 'S/N','1510001580','TRUPER','NARANJA','DES-33','S/N','TRABAJO EN COMUNIDAD',6],
            ['SP-MOSKO 3', 'S/P','1511001192','TRUPER','NARANJA','DES-63','S/N','TRABAJO EN COMUNIDAD',6],
            ['SP-MOSKO 6', 'S/P','1510001755','TRUPER','NARANJA','DES-33','S/N','TRABAJO EN COMUNIDAD',6],
            ['DESMALEZADORA 2', 'S/N','','','','TIPO BICI63CC','NIC-098-H00-003670','Dif. Actividades en comunidad',6],
            ['DESMALEZADORA 1', 'S/N','','','','TIPO BICI 63 CC','NIC-098-H00-003669','Dif. Actividades en comunidad',6],
            ['SP-18', 'S/P','3FEKF37HIRMA27939','FORD 3.5 TON','BLANCO','1994','NIC-098-H00-001566','No funciona odometro.',6],



            // SERVICIOS PÚBLICOS
            // LIMPIA

            ['SP-106','LA78582','3ALACYCS9GDHC0571','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-28','S/P','3HAMMAAR1GL165511','INTERNACIONAL','BLANCO','2016','NIC-098-125-004995','No funciona odometro.',7],
            ['SP-20','S/P','1504690C0','DINA PIPA','BLANCO','1990','NIC-098-H00-001540','No funciona odometro.',7],
            ['SP-08','S/P','1HTMAAN72H502291','INTERNACIONAL','BLANCO','2002','NIC-098-128-001567','servicios a diferentes comunidades',7],
            ['SP-104','LA785540','3ALACYCS7GDHC0617','FEIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-105','LA78548','3ALACYCS0GDHC0569','FREIGHTLINER','BLANCO','RECOLECTOR 2019','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-107','LA78544','3ALACYCS3GDHC0615','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-12','S/P','C1317UMED04477','FAMSA VOLTEO','BLANCO','1989','NIC-098-H00-001492','servicios a diferentes comunidades',7],
            ['SP-06','S/P','3GCM7H1MDVM500841','CHEVROLET','BLANCO','1997','NIC-098-H00-001512','servicios a diferentes comunidades',7],
            ['SP-109','LA78551','3ALACYCS1GDHC0614','FREIGTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-110','LA78569','3ALACYCS2GDHC0573','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-36','S/P','3HTNAABRX1N012995','INTERNACIONAL','BLANCO','2001','NIC-098-H00-001517','servicios a diferentes comunidades',7],
            ['SP-24','S/P','3GCM7H1MDVM103999','CHEVROLET KODIAK','BLANCO','2000','NIC-098-H00-001515','No funciona odometro.',7],
            ['SP-16','S/P','3B6MC36Z2WM244744','DODGE','BLANCO','1998','NIC-098-H00-001510','No funciona odometro.',7],
            ['SP-27','S/P','3HAMMAAR8GL262849','INTERNACIONAL','BLANCO','2016','NIC-098-125-004996','No funciona odometro.',7],
            ['SP-103','LA78571','3ALACYCSXGDHC0577','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','No funciona el odometro.',7],
            ['SP-102','LA78546','3ALACYCS7GDHC0570','FREIGHTLINER','BLANCO','RECOLOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-101','LA78552','3ALACYCS8GDHC0612','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-78','S/P','3FDMF56S13MB12261','FORD F-550 XL','BLANCO','2003','NIC-098-H00-001508','No funciona odometro.',7],
            ['SP-111','LA78579','3ALACYCS0GDHC0572','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-29','S/P','3HAMMAAR9GL262858','INTERNACIONAL','BLANCO','2016','NIC-098-125-004997','No funciona odometro.',7],
            ['SP-11','S/P','3GCM7H1J8WM501842','CHEVROLET','BLANCO','1998','NIC-098-H00-001511','No funciona odometro.',7],
            ['SP-13','S/P','3HAMMAAR3GL165509','INTERNACIONAL','BLANCO','2016','NIC-098-125-004994','No funciona odometro.',7],
            ['SP-114','LA78568','3ALACYCS4GDHC0574','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-72','S/P','1FDEF3G66BEC89385','FORD F-350','BLANCO','2011','NIC-098-H00-001532','No funciona odometro.',7],
            ['SP-38','S/P','3HAMMAAR1GL217526','INTERNACIONAL','BLANCO','2016','NIC-098-125-004998','No funciona odometro.',7],
            ['SP-20','S/P','1504690CO','DINA','ROJO','1990','NIC-098-H00-001540','No fuciona odometro.',7],
            ['SP-115','LA78553','3ALACYCS7GDHC0603','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-120','S/P','3ALACYCS9GDHC0568','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','No funciona el odometro.',7],
            ['SP-75','S/P','1FTNF20L92ED21504','FORD F250','BLANCO','2002','NIC-098-125-001506','No funciona odometro.',7],
            ['SP-10','S/P','C1317UMED04356','FAMSA','BLANCO','1990','NIC-098-F00-001625','No funciona odometro.',7],
            ['SP-73','S/P','1FDEF3G66BEC89399','FORD F-350','BLANCO','2011','NIC-098-H00-001533','No funciona odometro.',7],
            ['SP-116','LA78573','3ALACYCS1GDHC0578','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-07','S/P','C1317UMED02682','FAMSA','BLANCO','1989','NIC-098-H00-001529','No funciona odometro.',7],
            ['SP-112','LA78550','3ALACYCS9GDHC0618','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-71','S/P','1FDEF3G66BEC89404','FORD F-350','BLANCO','2011','NIC-098-H00-001534','No funciona odometro.',7],
            ['SP-02','S/P','3HAMMAAR09LO65371','INTERNATIONAL','BLANCO','2009','NIC-098-H00-001538','No funciona odometro.',7],
            ['SP-63','S/P','3HTMMAARX2N525332','INTERNACIONAL 4300AB','BLANCO','2002','NIC-098-H00-001530','No funciona odometro.',7],
            ['SP-119','LA78545','3ALACYCS4GDHC0610','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-61','S/P','3HAMMAAR25L161965','INTERNACIONAL','BLANCO','2005','NIC-098-H00-001526','No funciona el odometro.',7],
            ['SP-50','S/P','JAFO293813','CASE','AMARILLO','1845C','NIC-098-H00-001489','No funciona odometro.',7],
            ['SP-57','S/P','3HAMMAAR55L161961','INTERNACIONAL','BLANCO','2005','NIC-098-H00-001522','No funciona odometro.',7],
            ['SP-58','S/P','3HAMMAAR75L161962','INTERNACIONAL','BLANCO','2005','NIC-098-H00-001523','No funciona odometro.',7],
            ['SP-59','S/P','3HAMMAAR95L161963','INTERNACIONAL','BLANCO','2005','NIC-098-H00-001524','No funciona odometro.',7],
            ['SP-68','S/P','3ALACYC5XBDAZ6910','FREIGHTLINER','BLANCO','2011','NIC-098-H00-001535','servicios a diferentes comunidades',7],
            ['SP-03','S/P','3AKWJLBB2WD7336339','FREIGHTLINER','BLANCO','1998','NIC-098-H00-001537','servicios a diferentes comunidades',7],
            ['SP-60','S/P','3HAMMAAR95L161964','INTERNACIONAL','BLANCO','2005','NIC-098-H00-001525','No funciona odometro.',7],
            ['SP-113','LA78566','3ALACYCS6GDHC0575','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-108','LA78549','3ALACYCS5GDHC0616','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-117','LA78570','3ALACYCS8GDHC0576','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','servicios a diferentes comunidades',7],
            ['SP-01','S/P','3HAMMAAR89L092964','INTERNATIONAL','BLANCO','2009','NIC-098-H00-001536','No funciona odometro.',7],
            ['SP-118','LA78578','3ALACYCSXGDHC0613','FREIGHTLINER','BLANCO','RECOLECTOR 2016','CONTRATO No. MNR/SA/RP/02/2019','No funciona el odometro.',7],



            // VARIOS



            ['SRIA. AYTTO./ESTACAS','S/P','3N6CD15S81K069222','NISSAN','BLANCO','2001','NIC-098-114-004350','No funciona odometro.',8],
            ['SRI. DEL AYTTO/SENTRA','MYK8728','3N1AB7A03HL608931','NISSAN','VINO','SENTRA 2017','CONTRATO COMODATO','DIF. ACT. EN COM.',8],
            ['SRIA. DEL AYTTO/SUZUKI','NCG1336','TSMYD21SXJM416281','SUZUKI','AZUL ESMERALDA','VITARA 2018','CONTRATO COMODATO','DIF. ACT. EN COM.',8],
            




            

            ['1ER. REGIDOR/TOYOTA','NCD4603','2T3DFREV2JW706733','TOYOTA','','2018','CONTRATO COMODATO','DIF. ACT. EN COM.',9],
            




            

            ['2o. REGIDOR/VW','NNH2108','3VWLW6AJ8CM103199','VOLKSWAGEN','GRIS PLATA','2012','CONTRATO COMODATO','RECORRIDOS Y DIF. ACT.',10],
            




            

            ['3ER. REGIDOR/OPTRA','NDD8194','KL1JD51ZX6K419321','CHEVROLET','VERDE MENTA','2006','CONTRATO COMODATO','DIF. ACT. EN COM',11],
            




            

            ['4o. REGIDOR/VW VENTO','Z74AAT','MEX4G2606FT035611','VOLKSWAGEN','CAFÉ CARAMELO','2015','CONTRATO COMODATO','DIF. ACT. EN COM.',12],
            




            

            ['5o. REGIDOR/BMW','NFJ3954','WBA1S1101HV968882','B.M.W.','BLANCO','2017','CONTRATO COMODATO','DIF. ACT. EN COM.',13],
            




            

            ['6o. REGIDOR/TOYOTA','NKU7148','MHKMF5CEOLK005508','TOYOTA','GRIS OSCURO','2020','CONTRATO COMODATO','DIF. ACT. EN COM.',14],
            




            

            ['7o. REGIDOR/HONDA','NFH9304','1HGCR2650HA902057','HONDA','ROJO','2017','CONTRATO COMODATO','DIF. ACT. EN COM.',15],
            




            

            ['8o. REGIDOR/SEAT','MUZ5947','VSSSE65F6FR098223','SEAT','NEGRO','2015','CONTRATO COMODATO','DIF. ACT. EN COM.',16],
            ['8o. REGIDOR/TIIDA','NVC3961','3N1BC13D97L353499','NISSAN','GRIS PLATA','TIIDA 2007','CONTRATO COMODATO','DIF. ACT. EN COM.',16],
            




            

            ['9o. REGIDOR/PONTIAC','NKW1016','KL2TD51697B132158','PONTIAC','','2007','CONTRATO COMODATO','DIF. ACT. EN COM.',17],
            




            

            ['10o. REGIDOR/POLO','MPL3046','WVWAU6R6DY234771','VOLKSWAGEN','NEGRO','SEDAN POLO 2013','COMODATO','DIF. ACT. EN COM.',18],
            




            

            ['11ER. REGIDOR/JEEP','721ZRB','1C4RJEBG0EC501424','CHRYSLER','GRIS OXFORD','JEEP 2014','CONTRATO COMODATO','DIF. ACT. EN COM.',19],
            




            

            ['13er. REGIDOR/NISSAN','NFX7377','3N8CP5HE1KL476239','NISSAN','NEGRO','KICKS 2019','CONTRATO COMODATO','DIF. ACT. EN COM.',20],
            




            

            ['CONTRALORIA/IKON','S/P','3FABP04B97M105388','FORD FIESTA IKON','BLANCO','2007','NIC-098-138-000859','No funciona odometro.',21],
            ['CONTRALORIA/FORD IKON','HDZ281C','MAJFP1GD8FC139018','FORD','BLANCO','IKON 2015','CONTRATO COMODATO','DIF. ACT. EN COM.',21],
            ['CONTRALORIA/FIGO','G46-BDK','MAJFP1M16KA189058','FORD','BLANCO','2019','CONTRATO MNR/SA/RP/01/2019','DIF. ACT. EN COM.',21],
            ['CONTRALORIA/MOTO','4P2LX','3SCPFTEE9F1023837','ITALIKA','AZUL CON PLATA','2015','COMODATO','No funciona el odometro.',21],
            ['CONTRALORIA/TSURU','S/P','N1EB31S91K27001','NISSAN','BLANCO','2001','S/N','No funciona el odometro.',21],
            




            

            ['SINDICATURA/HONDA','NKU3752','2HGFG12808H903109','HONDA','BLANCO','CIVIC 2008','CONTRATO DE COMODATO','DIF. ACT. EN COM.',22],
            




            

            ['JURIDICO TIIDA','S/P','3N1BC1AD3FK194468','NISSAN TIIDA','GRIS PLATA','2015','NIC-098-M00-001947','No funciona odometro.',23],
            ['JURIDICO/CAMIONETA JEEP CHEROKEE','LXJ6060','1JAGW58N64C284887','DODGE','GRIS','2004','NIC-098-M00-000036','No funciona odometro.',23],
            




            

            ['COM. SOCIAL/FIGO','G97-BDK','MAJFP1M14KA190015','FORD','BLANCO','2019','CONTRATO MNR/SA/RP/01/2019','DIF. ACT. EN COM.',24],
            ['COM. SOCIAL/NISSAN','S/P','3N1EB31S582K362321','NISSAN SEDAN 4 PUERTAS','BLANCO','2002','NIC-098-A01-001108','No funciona odometro.',24],
            




            

            ['INGRESOS/TORNADO 2','NHY5688','93CCL80C4JB132753','CHEVROLET','BLANCO','2018','NIC-098-115-004754','No funciona odometro.',25],
            ['TESORERIA/CHEVROLET','S/N','1GCEC14X74Z189225','CHEVROLET','VERDE','2004','NIC-098-L00-001712','No funciona odometro.',25],
            ['TESORERIA/FIGO','NJD3723','MAJFP1M11KA186598','FORD FIGO','GRIS MERCURIO','2019 4 PTAS IMPULSE','NIC-098-L00-004979','Entrega de doc. Dentro  y fuera del Mpio.',25],
            ['TESORERIA/HONDA','PWV676A','19UTB4858JL900581','HONDA','GRIS','ACURA 2018','CONTRATO DE COMODATO','Entrega de documentación y dif. Act.',25],
            




            

            ['DES. URBANO/FORD K','S/P','9BFBT18N657535702','FORD','GRIS','2005','NIC-098-F01-000371','No funciona odometro.',26],
            ['DES. URBANO/IKON','MBD6317','3FABP04B57M104660','FORD','BLANCO','2007','NIC-098-F01-001218','No funciona odometro.',26],
            ['DESARROLLO URBANO/FORD','MBD6317','3FABP04B57M104666','FORD FIESTA IKON','VINO','2007','NIC-098-F01-001218','No funciona odometro.',26],
            




            

            ['EDUCACION/RANGER','S/P','8AFER5AD5A6309111','FORD RANGER','BCO/NGO','2010','NIC-098-O00-001907','No funciona odometro.',27],
            ['EDUCACION/RENAULT','MGV8290','93YB62JTXBJ070582','RENAULT','PLATA','2011','CONTRATO COMODATO','DIF. ACT. EN COM. Y MPIO.',27],
            




            

            ['PRESIDENCIA/CHEVY','MVJ4118','3GICFSPX8B5134421','CHEVROLET','BLANCO','2011','COMODATO','Diferentes actividades en com.',28],
            ['PRESIDENCIA/FORD FIESTA','MFA5281','9BFBP1AN7A8444800','FORD','BLANCO','2010','NIC-098-A00-000419','No funciona odometro.',28],
            ['PRESIDENCIA/FIGO 2','G82-BDK','MAJFP1M12KA191244','FORD FIGO','BLANCO','2019','CONTRATO MNR/SA/RP/01/2019','DIF. ACT. EN COM.',28],
            ['PRESIDENCIA/PLATINA','MAG1534','3N1JH01836L228425','NISSAN','PLATA','PLATINA 2006','CONTRATO COMODATO','No funciona el odometro.',28],
            ['PRESIDENCIA/PIPA','KZ52202','3AMBBMHB5WS044491','MERCEDES BENZ','ROJO','PIPA 1998','CONTRATO COMODATO','No funciona el odometro.',28],
            ['PRESIDENCIA/RANGER','H41-BDK','AFAFR6AA4KP104033','FORD','BLANCO','RANGER 2019','CONTRATO MNR/SA/RP/01/2019','DIF. ACT. EN COM.',28],
            ['PRESIDENCIA/FIGO','H64-BDK','MAJFP1M17KA185939','FORD','BLANCO','2019','CONTRATO MNR/SA/RP/01/2019','DIF. ACT. EN COM.',28],
            ['PRESIDENCIA/TIIDA','MRS9004','3N1BC1AS5EK208934','NISSAN','BLANCO','2014','CONTRATO COMODATO','No funciona el odometro.',28],
            




            

            ['FOMENTO AGROP./CHEVY','NLC9281','3G1SF21322S149607','CHEVROLET','BLANCO','CHEVY 2002','COMODATO','DIF. ACT. EN COM.',29],
            




            

            ['MEDIO AMBIENTE/TOYOTA','U67AKD','JTDKBRFU9G3525293','TOYOTA','BLANCO','PRIUS 2016','CONTRATO COMODATO','DIF. ACT. EN COM.',30],
            




            

            ['GOBERNACION/POINTER ROJO','NNT9138','9BWCC05X55P005919','VOLKSWAGEN','ROJO','POINTER 2005','CONTRATO COMODATO','No funciona el odometro.',31],
            ['GOBERNACION/IKON','MBD6311','3FABP04B07M104579','FORD','BLANCO','FIESTA IKON 2007','NIC-098-J00-000178','No funciona odometro.',31],
            ['GOBERNACION/TOYOTA','NDY6139','MHKMF53F5HK017850','TOYOTA','AZUL REY','AVANZA 2017','CONTRATO COMODATO','Diferentes act. En com.',31],
            ['GOBERNACION/RANGER','S/P','8AFER5AD5A6321100','FORD RANGER','BLANCO','2010','NIC-098-J00-001906','No funciona el odometro.',31],
            ['GOBERNACION/FORD ESCORT','NUU2107','1FABP13P8VWW146711','FORD','AZUL','ESCORT 1997','CONTRATO COMODATO','No funciona el odometro.',31],
            ['GOBERNACION/JETTA','NHZ7059','3VW1V09MXBM050333','VOLKSWAGEN','ROJO','JETTA 2011','CONTRATO COMODATO','DIF. ACT. EN COM.',31],
            ['GOBERNACION/TRAX','MSV1870','3GNCJ7CE4EL226134','CHEVROLET','GRIS PLATA','TRAX 2014','CONTRATO COMODATO','DIF. ACT. EN COM.',31],
            ['GOBERNACION/VW BCO.','NTV2352','11P9018435','VOLKSWAGEN','BLANCO','SEDAN 1993','CONTRATO COMODATO','No funciona el odometro.',31],
            ['GOBERNACION/TSURU','3365JER','3N1E831547K333745','NISSAN','BLANCO','TSURU 2007','CONTRATO COMODATO','No funciona el odometro.',31],
            




            

            ['DERECHOS HUMANOS/TSURU','030','3N1EB31S47K339772','NISSAN','NEGRO','2007','NIC-098-102-001701','No funciona odometro.',32],
            ['DERECHOS HUMANOS/HYUNDAI','MZT4736','TMCJ33A34HJ225691','HYUNDAI TUCSON','NEGRO','2017','COMODATO','DIF. ACT. EN COM.',32],
            




            

            ['PLANEACION/POINTER','LYF5553','9BWCC05X71T076525','WOLKSWAGEN','ROJO','2001','COMODATO','DIF. ACT. EN COM.',33],
            ['PLANEACION/KIA','NLR1886','3KPA24ACXLE25995','KIA','BLANCO','RIO 2020','CONTRATO COMODATO','DIF. ACT. EN COM.',33],
            




            

            ['SERV. GRALES./ESTACAS','S/P','3N6CD15S81K069222','NISSAN','BLANCO','2001 ESTACAS','NIC-098-114-004350','No funciona odometro.',34],
            ['SERV. GRALES/F 350','J95-BDK','1FDWF3G66KEF26462','FORD','BLANCO','REDILAS 2019','CONTRATO MNR/SA/RP/01/2019','DIF. ACT. EN COM.',34],
            ['SERV. GRALES/DAKOTA','S/N','1D7HE38K39S717043','DOGDE RAM DAKOTA','BLANCO','2009','NIC-098-E00-001883','DIF. ACTIVIDADES EN COMUNIDADES',34],
            




            

            ['DESARROLLO SOCIAL/TSURU','S/P','3N1EN31S07K340174','NISSAN','BLANCO','2007','NIC-098-I01-000491','RECORRIDO EN COMUNIDADES',35],
            ['DESARROLLO SOCIAL/URBAN','S/P','IN1FE56522X500725','NISSAN','BLANCO','2005','NIC-098-I01-000490','No funciona odometro.',35],
            




            

            ['BIENESTAR SOCIAL/JEEP','W45APG','1J4RS5GTXBC506302','CHRYSLER','NEGRO','JEEP 2011','CONTRATO COMODATO','DIF. ACT. EN COM.',36],
            ['BIENESTAR SOCIAL/MAZDA','MRF2930','JM3KE2B75F0464966','MAZDA','ROJO','2015','CONTRATO COMODATO','DIF. ACT. EN COMUNIDAD',36],
            




            

            ['TURISMO/IKON','MAJ5822','3FABP048X6M104684','FORD','BLANCO','2008','CONTRATO COMODATO','Dif. Activ. En comunidad',37],
            ['TURISMO/BEAT','NJA4836','MA6CB6CD0KT027659','CHEVROLET','BLANCO','BEAT 2019','CONTRATO COMODATO','DIF. ACT. EN COM.',37],
            ['TURISMO/ESCORT','MWL5349','1FABP13P2XW182851','FORD','VINO','1999','CONTRATO COMODATO','Dif. Actividades en comunidad',37],
            




            

            ['REC. MAT/CHEVY','LMK7978','93CSK80N8YC192460','CHEVROLET','BLANCO','2000','NIC-098-121-000440','No funciona odometro.',38],
            ['REC. MAT./NISSAN VERSA','NDL3443','3N1CN7AD6JK448202','NISSAN','BLANCO','2018','CONTRATO COMODATO','DIF. ACT. EN COMUNIDAD',38],
            ['RECURSOS MATERIALES/MOTO','S/P','ME1KG0443E2069447','YAMAHA MOTOCICLETA','BCO/NGO','2014','NIC-098-121-001984','No funciona odometro.',38],
            




            

            ['TENENCIA/TSURU','S/P','3N1EB31S47K339772','NISSAN','AZUL MARINO','SEDAN 2007','NIC-098-F01-001701','No funciona odometro.',39],
            




            

            ['GIRAS/MONZA','MXJ4830','3G1SE5433YX170636','CHEVROLET','BLANCO','2000','COMODATO','No funciona el odometro.',40],
            ['GIRAS/IKON','MBW7007','3FABP04B47M108103','FORD FIESTA IKON','GRIS','2007','NIC-098-E03-004500','No funciona odometro.',40],
            ['GIRAS/COMBI VW','SM02498','23R0004362','VOLKSWAGEN','ARENA','COMBI PANEL  1994','COMODATO','No funciona el odometro.',40],
            ['GIRAS/TSURU 93','NTS3494','3BAMB1352436','NISSAN','VERDE METALIZADO','TSURU 1993','CONTRATO COMODATO','NO FUNCIONA ODOMETRO.',40],
            ['GIRAS/NISSAN VAGONETA','MXW4608','3N1DY05S6XK0060041','NISSAN','ROJO','1999','CONTRATO COMODATO','No funciona el odometro.',40],
            ['GIRAS-FIGO','H85-BDK','MAJFP1M1XKA184462','FORD','BLANCO','2019','CONTRATO MNR/SA/RP/01/2019','DIF. ACT. EN COM.',40],
            




            

            ['CATASTRO/FIESTA IKON','MBD6095','3FABP04B77M104577','FORD','BLANCO','2007','NIC-098-118-001709','No funciona odometro.',41],
            




            

            ['MOVILIDAD/CAMIONETA','MXY3822','2G7200774B','NISSAN','BLANCO ROJO','CHASIS 1992','CONTRATO COMODATO','No funciona el odometro.',42],
            ['MOVILIDAD/BMW','MJT2395','WBAPH1103CA964812','BMW','GRIS OXFORD','SEDAN 2012','CONTRATO COMODATO','DIF. ACT. EN COM.',42],
            ['MOVILIDAD/TSURU','MVV4313','3N1EB31S6CK302829','NISSAN','BLANCO','TSURU SEDAN 2012','CONTRATO COMODATO','No funciona el odometro.',42],
            ['DMOVILIDAD/ROAD ZIPPER 2','S/P','2012/MOTOR No. 35250408','BARRIER SYSTEMS','BLANCO','QSM11','CONTRATO COMODATO','OPERACIÓN DE CARRILES DE CONTRAFLUJO',42],
            ['MOVILIDAD/ROAD ZIPPER 1','S/P','2012/MOTOR No. 35250409','BARRIER SYSTEMS','BLANCO','QSM11','CONTRATO COMODATO','OPERACIÓN DE CARRILES DE CONTRAFLUJO',42],
            ['MOVILIDAD-F150','H23-BDK','1FTEW1CB7KFA47243',' FORD F150','BLANCO','2018','CONTRATO MNR/SA/RP/01/2019','Vigilar, hacer recorridos y atender emergencias.',42],
            




            

            ['SINDICATO/FORD','MNM3299','1FADP3E22DL239147','FORD FOCUS','GRIS','2013','CONTRATO COMODATO','REUNIONES Y RECORRIDOS',43],
            




            

            ['CULTURA/FORD K','LRZ3300','9BFBT18N41778436B','FORD','AZUL CLARO','KA 2001','CONTRATO COMODATO','No funciona el odometro.',44],
            ['CULTURA-CAMIONETA','KZ86547','2GCEC19W9X1297729','CHEVROLET','GRIS PLATA','PICK UP 1999','CONTRATO COMODATO','No funciona el odometro.',44],
            ['CULTURA/TIIDA','MDV2484','3N1BC11S19L431973','NISSAN TIIDA','GRIS OXFORD','2009','COMODATO','No funciona el odometro.',44],
            




            

            ['INST. MUJER/VENTO','NBY5229','MEX5G2600JT043216','VOLKSWAGEN','NEGRO','VENTO 2018','CONTRATO COMODATO','DIF. ACT. EN COM.',45],
            ['INST. MUJER/TIGUAN','NHX9608','3VVKP65N7KM021151','VOLKSWAGEN','GRIS BLANCO','TIGUAN VAGONETA 2019','CONTRATO COMODATO','DIF. ACT. EN COM.',45],
            ['INST. MPAL. MUJER/CAVALIER','NCZ1400','LSGKB52H4JV046376','CHEVROLET','AZUL METALICO','CAVALIER 2018','CONTRATO COMODATO','DIF. ACT. EN COM.',45],
            




            

            ['OFICIALIA/JETTA','MNZ2044','3VWLW6AJ0DM261988','VOLKSWAGEN','AZUL','JETTA 2013','CONTRATO COMODATO','DIF. ACT. EN COM.',46],
            ['OFICIALIA/CAPTIVA','MJZ7450','3GNAL7EC8BS686444','CHEVROLET','GRIS','ACURA 2018','CONTRATO DE COMODATO','DIF. ACT. EN COM.',46],

        ];
        

        foreach ($vehicles as $key => $vehicle) {
            Vehicle::create([
                'vehicle'       => $vehicle[0],
                'plates'        => $vehicle[1],
                'serie'         => $vehicle[2],
                'brand'         => $vehicle[3],
                'color'         => $vehicle[4],
                'model'         => $vehicle[5],
                'inventory'     => $vehicle[6],
                'observations'  => $vehicle[7],
                'dependency_id' => $vehicle[8],
            ]);
        }
    }
}

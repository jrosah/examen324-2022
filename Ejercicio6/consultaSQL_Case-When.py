
import psycopg2 as pc

# Configuramos la conexión a POSTGRES
conexion = pc.connect(user="postgres", 
                      password="123456", 
                      host="127.0.0.1", 
                      port = "5432", 
                      database = "mibasejorgerosa")


# Creamos el cursor con el objeto conexion
cursor = conexion.cursor()

# Ejecutamos una consulta
sql="SELECT  avg(case when departamento ='01' then nota_final end) as CHQ, AVG(case when departamento ='02' then nota_final end) as LPZ, AVG(case when departamento ='03' then nota_final end) as CBA, AVG(case when departamento ='04' then nota_final end) as ORU, avg(case when departamento ='05' then nota_final end) as PT, AVG(case when departamento ='07' then nota_final end) as SCZ FROM PERSONA xp JOIN INSCRIPCION xi ON xp.ci = xi.ciEstudiante";
cursor.execute(sql)

# Recorremos los resultados y los mostramos
print ('chq \t', 'lpz \t', 'cba \t', 'oru \t', 'pt \t', 'scz \t')
for chq, lpz, cba, oru, pt, scz in cursor.fetchall() :
    print(f'{chq:.2f}\t {lpz:.2f}\t {cba:.2f}\t {oru:.2f}\t {pt:.2f}\t {scz:.2f}')
   
    
# Cerramos la conexión
conexion.close()
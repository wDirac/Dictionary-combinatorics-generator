# Dictionary-combinatorics-generator
Random dictionary generator, as a semi-efficient Algorithm

Es un generador de una cantidad total arbitraria de cadenas las cuales pueden tener longitud individual arbitraria o un rango aleatorio, es posible elegir la base simbolica apartir de la cual se crearan las combinaciones que uno quiera, y por ultimo un parametro check el cual si estara en 1 el diccionario tendra solo objetos unicos, ninguna repeticion, de lo contrario en check = 0, existe una posbilidad bastante baja de repeticion, en bases largas como la hexadecimal o bases N mayores a la hexadecimal y en longitudes individuales significantes, como por ejemplo 30 , la cantidad total de posibles objetos unicos es esta:

![equation](https://latex.codecogs.com/png.latex?%5Cdpi%7B200%7D%2016%5E%7B30%7D%20%3D%201%2C3292279957849158729038070602803e&plus;36)

Se puede deducir rapidamente el hecho de que por probabilidad cuando check este en 0 es muy dificil que existan repeticion en este tipo de base y longitud, no se tendra una certeza absoluta pero por probalidad uno puede estar seguro que no van a existir en una gran mayoria de casos.


Actualmente cabe mencionar que este algoritmo presente un serio problema en cuanto al recurso temporal, cuando la cantidad de cadenas es 
suficientemente grande y el parametro check esta en 1, siendo las dos operaciones mas repetidas de este algoritmo entre otras la de lectura en el array y la comprobacion de dos strings, a medida que se busca integrar mas claves estas tendran que ser comprobadas con las que ya estan para comprobar similitudes.

Lo cual tiene esta forma:

(Esto no pasara si check esta en 0, en ese caso su complejidad es lineal, se podrian generar diccionarios de TB's sin mucho gasto temporal, de esa forma es eficiente pero no se tiene la certeza absoluta que no haya repeticion en alguna parte)

![equation](https://latex.codecogs.com/png.latex?%5Cdpi%7B200%7D%20%5Csum_%7B%5Cpsi%20%3D%201%7D%5E%7B%5Clambda%20%7D%5Cleft%20%7C%20%5Cpsi%20%5Cright%20%7C%20%3D%20%7C%5Clambda%20-%20%28%5Clambda%20-%20%5Cpsi_%7B1%7D%29%7C%20&plus;%20%7C%5Clambda%20-%20%28%5Clambda%20-%20%5Cpsi_%7B2%7D%29%7C%20&plus;.....&plus;%20%7C%5Clambda%7C)

o visto de una manera resumida:

![equation](https://latex.codecogs.com/png.latex?%5Cdpi%7B200%7D%20%5Cfrac%7BN%28N%20&plus;%201%29%7D%7B2%7D)


Conclusion, para diccionarios modestos es relativamente eficiente, en un futuro habra una implementacion en C la cual aproveche todos los nucleos de una CPU en lo posible, y en tiempo sea mucho mas eficiente.

# Dictionary-combinatorics-generator
Random dictionary generator, as a semi-efficient Algorithm


Actualmente este algoritmo presente un serio problema en cuanto al recurso temporal, cuando la cantidad de cadenas es 
suficientemente grande y el parametro check esta en 1, siendo las dos operaciones mas repetidas de este algoritmo entre otras la de lectura en el array y la comprobacion de dos strings, a medida que se busca integrar mas claves estas tendra que ser comprobadas con las que ya estan para comprobar similitudes.

Lo cual tiene esta forma:

![equation](https://latex.codecogs.com/png.latex?%5Cdpi%7B200%7D%20%5Csum_%7Bi%20%3D%201%7D%5E%7BN%7Di%20%3D%201%20&plus;%202%20&plus;%203...%20%28N%20-%201%29%20&plus;%20N)

o visto de una manera resumida:

![equation](https://latex.codecogs.com/png.latex?%5Cdpi%7B200%7D%20%5Cfrac%7BN%28N%20&plus;%201%29%7D%7B2%7D)

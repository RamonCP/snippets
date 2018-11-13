def Menorvalor (a,b,c):
    #a = sorted(a)
    menor=a
    if b < menor:
        menor=b
    if c< menor:
        menor =c
    return menor
        
def Criarlista():
    import random
    lista = []
    num = 0
    for x in range(0,100):
        lista.append(random.randrange(0,100))
    return lista

def ordenar(lista1, lista2 , lista3):
    listaFinal = []
    for x in range(0,len(lista1)):
        teste = Menorvalor(lista1[x], lista2[x], lista3[x])
        listaFinal.append(teste)
    return listaFinal    
                
lista1 = Criarlista()
lista2 = Criarlista()
lista3 = Criarlista()
listaFinal = ordenar(lista1, lista2, lista3)

print("Lista 1 \n",lista1,"\n")
print("Lista 2 \n",lista2,"\n")
print("Lista 3 \n",lista3,"\n")
print("Lista Final \n",listaFinal,"\n")


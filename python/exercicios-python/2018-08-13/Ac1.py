# AC - Linguagem De Programação
# Nome: Ramon C. Pires 2ºD - noturno
# R.A:1800260

def exerc2(a, b, c):
    if a == b and a == c and b == c:
        return "Iguais"
    else:
        return "Diferentes"

exerc2("a","a","b")

def exerc4(letra):
    letter = letra.lower()
    if letter == "a" or letter == "e" or letter == "i" or letter == "o" or letter == "u":
        return 1
    else:
        return 0
    
exerc4("ç")

def exerc6(lista):
    lista2 = []
    y = 0
    for x in range(len(lista)-1,-1, -1):        
        lista2.insert(y, lista[x])
        y = y +1
    return lista2

lista = [1,2,3,4,5,450,1000,4,1,5,20,50]
exerc6(lista)


def exerc8(lista):
    listaFinal = []
    y = 0
    j = False
    while j != True:
        j=True
        for i in range(len(lista)-1):
            if lista[i] > lista[i+1]:
                lista[i], lista[i+1] = lista[i+1],lista[i]
                j = False
    return lista
         
lista = [1,1000,3,4,20,450,4,1,5,2000,2,6,9]
exerc8(lista)

def exerc10(lista1, lista2):
    outraLista = []
    for x in range(len(lista1)):
        num = lista1[x] * lista2[2]
        outraLista.insert(x , num)
    return outraLista

lista1 = [1,2,3,4,5,30]
lista2 = [2,2,2,2,2,2]
exerc10(lista1,lista2)


            


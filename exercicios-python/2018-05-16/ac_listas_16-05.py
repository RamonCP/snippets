'''
======== Atividade Continua =========
 Nome : Ramon C. Pires
 R.A. : 1800260
 S.I. - 1ºD noturno
=====================================
'''

#Escreva um programa que peça para o usuário entrar com
#um número n e utilize o Crivo de Eratóstenes
#para encontrar todos os primos menores ou iguais a n.

print("+---------------------+")
print("    EXERCÍCIO 9")
print("+---------------------+\n")

def criarLista(n):
    lista=[]
    for i in range(2, n+1):
        lista.append(i)
    return lista

def primos(lista):
    primos=[]
    tot = 0
    for i in lista:
       if (i%2!=0 or i==2) and (i%3!=0 or i==3) and (i%5!=0 or i==5) and (i%7!=0 or i==7):
           primos.append(i)    
    return primos
print(primos(criarLista(n=int(input("Digite um número: ")))))

#Escreva um programa em Python com uma função
#que faça a intercalação entre duas listas.
print("\n+---------------------+")
print("    EXERCÍCIO 13")
print("+---------------------+\n")

def intercala(l1,l2):
    intercalada = []
    for j,x in zip(l1, l2):
        intercalada.append(j)
        intercalada.append(x)
    return intercalada

print(intercala([6,6,6,9,5,10,22,13],[2,2,2,8,7,2,4,1]))

#Escreva  um  programa  em  Python  com  uma  função  que,  dada  uma  lista  de  números  inteiros 
#com  n  elementos,rearranje  os  elementos  da  lista de  tal  forma  que  todos  os  elementos 
#menores ou iguais ao primeiro fiquem à sua esquerda e todos os outros, à sua direita.

print("\n+---------------------+")
print("    EXERCÍCIO 14")
print("+---------------------+\n")

#AINDA INCOMPLETA
list_teste=[5,6,2,7,9,1,8,3,7]
list_tes=[]
for i in range(len(list_teste)):
  for x in range(len(list_teste)):
      if x < i:
          list_tes.append(x)
print(list_tes)           



    

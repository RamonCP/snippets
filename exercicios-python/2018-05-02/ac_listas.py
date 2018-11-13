'''
======== Atividade Continua =========
 Nome : Ramon C. Pires
 R.A. : 1800260
 S.I. - 1ºD noturno
=====================================
'''
# Criar programa que receba numeros digitados pelo
# usuario, enquanto a soma destes numeros for menor que 100
# no final,imprima a soma total e a média
soma = 0
cont = 0
while soma < 100:
       num = int(input("Digite um número: "))
       soma += num
       cont +=1
print("A média é: ",soma/cont)

lista = [10,10,10,10,10,20,30]

# Criar uma função que retorne a soma de todos os valores
# de uma lista
def somaLista(lista):
    soma= 0
    for i in lista:
        soma+=i
    return soma
print("A soma da lista é: ",somaLista(lista))

# Criar uma função que retorne a média da soma de todos os
# valores de uma lista
def mediaLista(soma):
    media=soma/len(lista)
    return media    
print("A média da lista é: ",mediaLista(somaLista(lista)))


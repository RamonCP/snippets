'''
======== Atividade Continua =========
 Nome : Ramon C. Pires
 R.A. : 1800260
 S.I. - 1ºD noturno
=====================================
'''
print("+---------------------+")
print("    EXERCÍCIO 10")
print("+---------------------+\n")
#Faça um programa que receba a temperatura média de cada mês do ano e armazene-as em
#uma lista. Após isto, calcule a média anual das temperaturas e mostre todas as temperaturas
#acima da média anual, e em que mês elas ocorreram (mostrar o mês por extenso: 1 – Janeiro,
#2 – Fevereiro, . . . ).

def tempMes(mes):
    soma=0
    for i in mes:
        soma+=i
    media = soma/len(mes)
    return media
print(tempMes([21,22,20,25,17,18,19,20,16,13,16,26]))


print("\n============================================================================")
print("\n+---------------------+")
print("    EXERCÍCIO 11")
print("+---------------------+\n")
#O programa deve no final emitir uma classificação sobre a participação da
#pessoa no crime. Se a pessoa responder positivamente a 2 questões ela deve
#ser classificada como "Suspeita",entre 3 e 4 como "Cúmplice" e 5 como
#"Assassino". Caso contrário, ele será classificado como
#"Inocente". 
def crime(perg):
    suspeito=0
    classif=""
    for i in perg:
        print(i)
        resposta = input("Digite s se SIM ou n se NÃO: ")
        print("\n")
        if resposta == "s":
            suspeito+=1

    if suspeito == 2:
       classif="Você é suspeito do crime"
    elif suspeito == 3 or suspeito ==4:
       classif="Você é cúmplice do crime"
    elif suspeito == 5:
       classif="Você é o culpado de assassinato"
    else:
        classif = "Você é inocente do crime"
    return classif  
print(crime(["Telefonou para a vítima?", "Esteve no local do crime?", "Mora perto da vítima?", "Devia para a vítima?", "Já trabalhou com a vítima?"]))


print("\n============================================================================")
print("\n+---------------------+")
print("    EXERCÍCIO 12")
print("+---------------------+\n")
#uma função para efetuar a intersecção entre dois conjuntos, ou seja,
#os elementos em comum entre os dois conjuntos. O conjunto C
#conterá a intersecção de A e B.
def interseccao(a, b):
    c = []
    for x in a:
        for y in b:
            if x == y :
                c.append(x)
    return c
print(interseccao([7, 2, 5, 8, 4],[4, 2, 5,]))

    

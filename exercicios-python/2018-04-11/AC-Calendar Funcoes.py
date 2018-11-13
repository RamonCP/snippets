# AC - Calendário com Funções
# Nome : Ramon C Pires
# R.A. : 1800260
# S.I. - 1ºD noturno

def Bissexto(ano):   
  if (ano%4==0) and (not(ano%100==0) or (ano%400==0)):
    bi = True
  else:
    bi = False  
  return(bi)

def diaMes(mes):
  if mes==2:
    if Bissexto(ano) == True:
      dias=29   
    else:
      dias=28
  elif mes == 4 or mes==6 or mes==9 or mes==11:
      dias = 30
  else:
      dias = 31
  return(dias)    

def descValor(ano,mes, bi, valor):
     inicial = int(str(ano)[:2])
     final = int(str(ano)[2:])
     valor = final+ final//4
     if  int(inicial)==18:
       valor += 2 
     elif int(inicial)==20:
       valor +=6
     if( mes==1 and bi==False):
       valor +=1
     elif( mes==2 and bi==False):
        valor +=4
     if (mes==2 and bi==True):
        valor +=3
     elif( mes==3 or mes==11):
        valor+=4
     if(mes==4 or mes == 7):
        valor+=0
     elif( mes==5):
        valor+=2
     if(mes==6):
        valor+=5
     elif(mes==8):
        valor+=3
     if(mes==10):  
        valor+=1
     elif(mes==9 or mes==12):
        valor+=6
     valor = (valor + 1)% 7
     if valor == 0:
        valor = 7   
     return(valor)               
   

def diaSemana(valor):
          if valor == 0:
             valor = 7        
          if valor ==1:
              feira = "Domingo"
          if valor ==2:
              feira = "Segunda"
          if valor ==3:
              feira = "Terça"
          if valor ==4:
              feira = "Quarta"
          if valor ==5:
              feira = "Quinta"
          if valor ==6:
              feira = "Sexta"              
          if valor ==7 :
              feira = "Sabado"    
          return(feira)
                  

def calendar(valor, cont, dias):
  print("\nMÊS ",mes)
  print("D  S  T  Q  Q  S  S ")
  for x in range(1,valor):
      print('   ',end='')
  cont = valor
  for dia in range (1,dias+1):
              if dia < 10:
                    print(0,end='')
              if cont < 7:
                  print(dia,end =' ')
                  cont += 1
              else:
                    print(dia, end='\n')
                    cont = 1       
  print()
  print()
   
validacao = True
bi= False
valor=0
dias=0
cont=0
while validacao == True:
  final = int(input("Digite 2 para finalizar, ou digite 1 para continuar:"))
  if final==2:
   print("Até Mais")
   validacao=False
  elif final==1:
    ano = int(input("Digite o ano:"))
    if ano<1000 or ano>5000:
        print("Ano inválido, digite novamente")
    else:
        
        for mes in range(1, 13):
          dias = diaMes(mes)
          valor = descValor(ano,mes, Bissexto(ano), valor)
          calendar(valor, cont, dias)

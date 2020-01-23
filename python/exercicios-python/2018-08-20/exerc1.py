#dicionario ={chave,valor}

#dic ={}
#dic ={'chave':'valor':'chave2':'valor2'}
#dic={}

#dic = {}

#dic['1800479'] = "Daniel"

#print(['1800479'])
#dic.keys()

#dic.values()

def exibir(dic):
    print(dic,"\n")

def gravar():
   nome = input("Digite um nome: ")
   ra = int(input("Digite um ra: "))
   return nome, ra

def CadastroAlunos(qtd):
    alunos = {}
    for i in range(qtd):
        nomeAluno, raAluno = gravar()
        alunos[raAluno] = nomeAluno
    exibir(alunos)    
   
CadastroAlunos(2)        



#===============================#
#   Ramon C. Pires RA:1800260
#   SI 2ºD - noite
#===============================#
def qtd():
    qtd = int(input("Digite a qtd de funcionarios que deseja cadastrar: "))
    busca = input("Digite 1 para cadastra por CPF ou 2 para cadastrar por nome: ")
    recebeDados(qtd,busca)

def recebeDados(qtd,busca):
    dic = {}
    lista = []
    dic = lista
    if busca == "1":     
        for x in range(qtd):
            matricula = int(input("Digite a matricula: "))
            cpf = int(input("Digite o cpf: "))    
            dic = {'Matricula':matricula,'CPF':cpf}
            lista.append(dic)
    elif busca == "2":
        for x in range(qtd):
            matricula = int(input("Digite a matricula: "))
            nome = input("Digite o nome: ")
            dic = {'Matricula':matricula,'Nome':nome}
            lista.append(dic)
    exibir(lista)
            
def exibir(dic):
    for x in range(len(dic)):
        print(dic[x])

qtd()

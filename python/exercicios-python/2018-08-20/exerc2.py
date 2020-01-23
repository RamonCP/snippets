def exibir(dic):
    print(dic)

def cad(opcao):
    if opcao == "1":
        for x in range(2):
            placa = input("Digite a placa: ") 
            modelo = input("Digite o modelo: ")
        dic = {'placa':placa,'modelo':modelo}
    else:
        for x in range(2):
            ra = input("Digite o ra do aluno: ") 
            nome = input("Digite o nome do aluno: ")
        dic = {'ra':ra,'nome':nome}    
        
    exibir(dic)

def opcao():
    opcao = input("Digite 1 para cadastrar carros\nDigite 2 para cadastrar alunos: \n")
    cad(opcao)

opcao()    

    

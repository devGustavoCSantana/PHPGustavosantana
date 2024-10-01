[10:29] Gustavo Cavalcante
# Importando uma biblioteca randomica
import random
 
numero = random.randint(1, 100)
 
escolha = 0
tentativas = 0
 
while (escolha != numero):
    escolha = int(input("Entre com um número de 0 a 100:\n"))
 
    tentativas += 1
 
    if (escolha < numero):
        print(f"O número {escolha}, é menor que o sorteado!")
    elif (escolha > numero):
        print(f"O número {escolha}, é maior que o sorteado!")
    else:
        print(f"O número {escolha} foi o sorteado!")
 
else:
    print(f"Você acertou com {tentativas} tentativas, PARABÉNS!!")
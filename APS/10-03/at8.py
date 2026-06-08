import random

numero_sorteado = random.randint(0, 10)
palpite = int(input("Digite um número entre 0 e 10: "))

if palpite == numero_sorteado:
    print("Parabéns! Você acertou o número sorteado!")
else:
    print(f"Você errou! O número sorteado foi {numero_sorteado}.")
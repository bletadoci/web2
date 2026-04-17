#pjesa e blinit
def print_square():
    print("\nPolybius Square:")
    print("    1  2  3  4  5")
    alphabet = "ABCDEFGHIKLMNOPQRSTUVWXYZ"
    for i in range(5):
        row_letters = alphabet[i * 5:(i + 1) * 5]
        print(f"{i + 1}   {'  '.join(row_letters)}")
    print()

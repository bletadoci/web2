#pjesa blertes
def create_polybius_square():
    square = {}
    alphabet = "ABCDEFGHIKLMNOPQRSTUVWXYZ"
    for index, letter in enumerate(alphabet):
        row = (index // 5) + 1
        col = (index % 5) + 1
        square[letter] = (row, col)
    return square

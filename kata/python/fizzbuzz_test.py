import unittest
from fizzbuzz import *

class FizzbuzzTest(unittest.TestCase):
  def test_un_renvoie_un(self):
    self.assertEqual(1, fizzbuzz(1))

if __name__ == "__main__":
  unittest.main()
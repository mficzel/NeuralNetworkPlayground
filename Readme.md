```mermaid
---
title: Neural Network Architecture
---
classDiagram

  class Network {
     + int inputWidth
     + int outputWidth
     + int networkWidth
     + int networkDepth
     + Layer inputLayer
     + Layer[] networkLayers 
     + Layer outputLayer  
     + create(int inputWidth, int outputWidth, int networkWidth, int networkDepth) self

     + setInputs(float[]) void
     + getOutputs() float[]

     + setErrors(float[]) void
  }

  class Layer {
     + int inputWidth
     + int layerWidth
     + Neuron[] neurons 
     + create(int inputWidth, int layerWidth) self

     + setInputs(float[]) void
     + getOutputs() float[]
     
     + setErrors(float[]) void
     + getUpstreamErrors() float[]
  }

  class Neuron {
     + int inputWidth
     + create(int inputWidth) self
     + setWeights(float[]) void
     + getWeights() float[]
     + setInputs(float[]) void
     + getOutput() float

     + setError(float error) void
     + getUpstreamErrors() float[]
  }

  Network --* Layer : layers
  Layer --* Neuron : neurons
```
